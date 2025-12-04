<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\NoteRequest;

class NotesController extends Controller
{ 
    public function index(Request $request)
    {
        $buscar = $request->input('buscar');

        $notes = Note::query()
            ->when($buscar, function($query, $buscar) {
                $query->where('title', 'like', "%{$buscar}%");
            })
            ->get();

        return view('notes.index', compact('notes'));
    }

    public function create(): View
    {
        return view('notes.create');
    }

    public function store(NoteRequest $request): RedirectResponse
    {
        Note::create($request->all());
        return redirect()->route('note.index')->with('success', 'Note Created');
    }

    public function edit(Note $note): View
    {
        return view('notes.edit', compact('note'));
    }

    public function update(NoteRequest $request, Note $note): RedirectResponse
    {
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Note Updated');
    }

    public function show(Note $note): View
    {
        return view('notes.show', compact('note'));   // ✔ CORREGIDO
    }

    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Note Deleted');
    }

    // ⭐ MÉTODO PARA IMPRIMIR
    public function imprimir($id)
    {
        $nota = Note::findOrFail($id);  // ✔ Modelo correcto
        return view('notes.imprimir', compact('nota'));  // ✔ Vista correcta
    }
}

    