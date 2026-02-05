@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    {{-- HEADER --}}
    <div>
        <h2 class="text-2xl font-bold text-slate-900">Edit Gallery</h2>
        <p class="mt-1 text-sm text-slate-600">
            Kamu bisa edit (crop/zoom/rotate) foto lama, atau upload foto baru lalu crop.
        </p>
    </div>

    {{-- FORM --}}
    <div class="rounded-2xl bg-white p-6 shadow-sm border border-slate-200">
        <form id="galleryForm"
              action="{{ route('admin.gallery.update', $gallery->id) }}"
              method="POST"
              enctype="multipart/form-data"
              class="space-y-6">
            @csrf
            @method('PUT')

            {{-- TITLE --}}
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Judul (Opsional)</label>
                <input type="text"
                       name="title"
                       value="{{ old('title', $gallery->title) }}"
                       placeholder="Judul foto..."
                       class="w-full rounded-lg border border-slate-300 px-4 py-2 focus:border-indigo-500 focus:ring-indigo-500">
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- CURRENT IMAGE --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div>
                    <p class="text-sm font-semibold text-slate-700 mb-2">Foto Saat Ini</p>
                    <div class="overflow-hidden rounded-xl border border-slate-200 bg-slate-50">
                        <img id="currentImg"
                             src="{{ asset('storage/' . $gallery->image) }}"
                             alt="Foto Lama"
                             class="w-full h-64 object-cover">
                    </div>

                    <div class="mt-3 flex flex-wrap gap-2">
                        <button type="button"
                                id="btnEditOld"
                                class="inline-flex items-center justify-center rounded-lg bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800 transition">
                            Edit Foto Lama (Crop)
                        </button>

                        <label class="inline-flex items-center justify-center rounded-lg border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition cursor-pointer">
                            Upload Foto Baru
                            <input id="newImageInput" type="file" name="image" accept="image/*" class="hidden">
                        </label>
                    </div>

                    <p class="mt-2 text-xs text-slate-500">
                        Kalau kamu crop, hasilnya akan menggantikan foto lama saat disimpan.
                    </p>

                    @error('image')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- PREVIEW RESULT --}}
                <div>
                    <p class="text-sm font-semibold text-slate-700 mb-2">Preview Hasil Edit</p>
                    <div class="rounded-xl border border-slate-200 bg-slate-50 overflow-hidden">
                       <img id="resultPreview" src="" class="hidden w-full aspect-[2/3] object-cover" alt="Preview">
<div id="resultEmpty" class="aspect-[2/3] flex items-center justify-center text-slate-400 text-sm">

                            Belum ada hasil edit.
                        </div>
                    </div>

                    <div class="mt-3 text-xs text-slate-500">
                        Preview ini berasal dari hasil crop yang akan disimpan.
                    </div>
                </div>
            </div>

            {{-- Hidden field: base64 hasil crop --}}
            <input type="hidden" name="cropped_image" id="croppedImage">

            {{-- ACTIONS --}}
            <div class="flex items-center gap-3 pt-2">
                <button type="submit"
                        class="inline-flex items-center justify-center rounded-lg bg-indigo-600 px-6 py-2 font-semibold text-white hover:bg-indigo-700 transition">
                    Simpan Perubahan
                </button>

                <a href="{{ route('admin.gallery.index') }}"
                   class="inline-flex items-center justify-center rounded-lg border border-slate-300 px-6 py-2 font-semibold text-slate-700 hover:bg-slate-100 transition">
                    Batal
                </a>
            </div>
        </form>
    </div>

    {{-- MODAL CROP --}}
    <div id="cropModal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative mx-auto mt-10 w-[95%] max-w-4xl rounded-2xl bg-white shadow-lg overflow-hidden">
            <div class="flex items-center justify-between px-5 py-4 border-b">
                <h3 class="font-bold text-slate-900">Edit Gambar (Crop / Zoom / Rotate)</h3>
                <button type="button" id="closeModal" class="text-slate-500 hover:text-slate-900 text-xl leading-none">
                    ×
                </button>
            </div>

            <div class="p-5">
                <div class="rounded-xl border border-slate-200 bg-slate-50 overflow-hidden">
                    <img id="cropImage" src="" alt="Crop Area" class="max-h-[65vh] w-full object-contain">
                </div>

                {{-- CONTROLS --}}
                <div class="mt-4 flex flex-wrap gap-2">
                    <button type="button" id="zoomIn" class="rounded-lg border px-3 py-2 text-sm font-semibold hover:bg-slate-50">Zoom +</button>
                    <button type="button" id="zoomOut" class="rounded-lg border px-3 py-2 text-sm font-semibold hover:bg-slate-50">Zoom -</button>
                    <button type="button" id="rotateLeft" class="rounded-lg border px-3 py-2 text-sm font-semibold hover:bg-slate-50">Rotate -90</button>
                    <button type="button" id="rotateRight" class="rounded-lg border px-3 py-2 text-sm font-semibold hover:bg-slate-50">Rotate +90</button>
                    <button type="button" id="resetCrop" class="rounded-lg border px-3 py-2 text-sm font-semibold hover:bg-slate-50">Reset</button>

                    <div class="ml-auto flex gap-2">
                        <button type="button" id="cancelCrop" class="rounded-lg border px-4 py-2 text-sm font-semibold hover:bg-slate-50">
                            Batal
                        </button>
                        <button type="button" id="applyCrop" class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">
                            Terapkan Crop
                        </button>
                    </div>
                </div>

                <p class="mt-3 text-xs text-slate-500">
                    Tip: kamu bisa drag untuk geser area crop.
                </p>
            </div>
        </div>
    </div>
</div>

{{-- Cropper.js CDN --}}
<link rel="stylesheet" href="https://unpkg.com/cropperjs@1.6.2/dist/cropper.min.css">
<script src="https://unpkg.com/cropperjs@1.6.2/dist/cropper.min.js"></script>

<script>
    let cropper = null;
    let sourceType = 'old'; // 'old' | 'new'

    const cropModal = document.getElementById('cropModal');
    const cropImage = document.getElementById('cropImage');
    const currentImg = document.getElementById('currentImg');
    const newImageInput = document.getElementById('newImageInput');

    const croppedImageInput = document.getElementById('croppedImage');
    const resultPreview = document.getElementById('resultPreview');
    const resultEmpty = document.getElementById('resultEmpty');

    function openModalWithSrc(src) {
        cropModal.classList.remove('hidden');
        cropImage.src = src;

        // destroy old cropper if exist
        if (cropper) {
            cropper.destroy();
            cropper = null;
        }

        cropper = new Cropper(cropImage, {
            viewMode: 1,
            autoCropArea: 1,
            responsive: true,
            background: false,
        });
    }

    function closeModal() {
        cropModal.classList.add('hidden');
        if (cropper) {
            cropper.destroy();
            cropper = null;
        }
        cropImage.src = '';
    }

    // Edit foto lama
    document.getElementById('btnEditOld')?.addEventListener('click', () => {
        sourceType = 'old';
        openModalWithSrc(currentImg.src);
    });

    // Upload foto baru -> langsung buka crop
    newImageInput?.addEventListener('change', (e) => {
        const file = e.target.files?.[0];
        if (!file) return;
        sourceType = 'new';

        const url = URL.createObjectURL(file);
        openModalWithSrc(url);
    });

    // Modal controls
    document.getElementById('closeModal')?.addEventListener('click', closeModal);
    document.getElementById('cancelCrop')?.addEventListener('click', closeModal);

    document.getElementById('zoomIn')?.addEventListener('click', () => cropper?.zoom(0.1));
    document.getElementById('zoomOut')?.addEventListener('click', () => cropper?.zoom(-0.1));
    document.getElementById('rotateLeft')?.addEventListener('click', () => cropper?.rotate(-90));
    document.getElementById('rotateRight')?.addEventListener('click', () => cropper?.rotate(90));
    document.getElementById('resetCrop')?.addEventListener('click', () => cropper?.reset());

    // Apply crop -> simpan base64 ke hidden input + preview
    document.getElementById('applyCrop')?.addEventListener('click', () => {
        if (!cropper) return;

        const canvas = cropper.getCroppedCanvas({
            // kamu bisa atur output size kalau mau:
            // width: 1200,
            // height: 800,
            imageSmoothingQuality: 'high'
        });

        const dataUrl = canvas.toDataURL('image/jpeg', 0.9); // jpg kualitas 90%
        croppedImageInput.value = dataUrl;

        resultPreview.src = dataUrl;
        resultPreview.classList.remove('hidden');
        resultEmpty.classList.add('hidden');

        closeModal();
    });

    // klik background untuk close
    cropModal?.addEventListener('click', (e) => {
        if (e.target === cropModal) closeModal();
    });
</script>
@endsection
