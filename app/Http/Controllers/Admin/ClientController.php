<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->get();
        return view('pages.admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('pages.admin.clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'website' => 'nullable|url',
        ]);

        $data = $request->only('name', 'website');
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('clients', 'public');
        }

        Client::create($data);

        return redirect()
            ->route('admin.clients.index')
            ->with('success', 'Client berhasil ditambahkan');
    }

    public function edit(Client $client)
    {
        return view('pages.admin.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'website' => 'nullable|url',
        ]);

        $data = $request->only('name', 'website');
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('logo')) {
            if ($client->logo) {
                Storage::disk('public')->delete($client->logo);
            }
            $data['logo'] = $request->file('logo')->store('clients', 'public');
        }

        $client->update($data);

        return redirect()
            ->route('admin.clients.index')
            ->with('success', 'Client berhasil diperbarui');
    }

    public function destroy(Client $client)
    {
        if ($client->logo) {
            Storage::disk('public')->delete($client->logo);
        }

        $client->delete();

        return redirect()
            ->route('admin.clients.index')
            ->with('success', 'Client berhasil dihapus');
    }
}
