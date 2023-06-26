<?php

namespace App\Http\Livewire\Admin\Treatment;

use Livewire\Component;
use App\Models\Treatment;

class TreatmentSection extends Component
{


    public function toggle(Treatment $treatment)
    {
        // dd($treatment);
        $treatment->update(['active' => !$treatment->active]);
        return redirect('manage-treatment');
    }
    public function render()
    {
        $treatments = Treatment::paginate(7);
        return view('livewire.admin.treatment.treatment-section', ['treatments' => $treatments]);
    }
}
