<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class Test extends Component
{
    public $buscar = ''; 
    public $selectedNoteId = null;

    // Selección múltiple
    public $selected = [];     
    public $selectAll = false; 

    // Escuchar el evento desde el header
    protected $listeners = ['emptyList'];

    public function mount()
    {
        $this->buscar = request('buscar', '');
    }

    // Selección individual de fila
    public function select($id)
    {
        $this->selectedNoteId = $id;
    }

    // Eliminar un solo registro
    public function delete($id)
    {
        $note = Note::find($id);

        if ($note) {
            $note->delete();
            $this->selectedNoteId = null;
        }
    }

    // Seleccionar o deseleccionar todos
    public function updatedSelectAll($value)
    {
        $notas = Note::query()
            ->when($this->buscar, fn($q) => 
                $q->where('title', 'like', "%{$this->buscar}%")
            )
            ->pluck('id')
            ->toArray();

        $this->selected = $value ? $notas : [];
    }

    // Contar elementos seleccionados
    public function countSelected()
    {
        return count($this->selected);
    }

    // Eliminar registros seleccionados
    public function deleteSelected()
    {
        Note::whereIn('id', $this->selected)->delete();

        $this->selected = [];
        $this->selectAll = false;
        $this->selectedNoteId = null;
    }

    // Vaciar toda la lista
    public function emptyList()
    {
        Note::truncate(); // Borra todos los registros
        $this->selectedNoteId = null;
        $this->selected = [];
        $this->selectAll = false;
    }

    public function render()
    {
        $notas = Note::query()
            ->when($this->buscar, fn($query) => 
                $query->where('title', 'like', "%{$this->buscar}%")
            )
            ->get();

        return view('livewire.test', compact('notas'));
    }
}
