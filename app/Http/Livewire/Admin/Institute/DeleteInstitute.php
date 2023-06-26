<?php

namespace App\Http\Livewire\Admin\Institute;

use Livewire\Component;
use App\Models\Institute;
use LivewireUI\Modal\ModalComponent;

class DeleteInstitute extends ModalComponent
{
    public Institute $institute;
    public function mount(Institute $institute)
    {
        $this->institute = $institute;
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function deleteInstitute()
    {
        $this->institute->delete();
        return redirect('admin/institutes')->with('message', 'Institute deleted successfully.');
    }


    public function render()
    {
        return view('livewire.admin.institute.delete-institute');
    }
}
