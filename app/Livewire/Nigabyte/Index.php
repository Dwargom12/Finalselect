<?php

namespace App\Livewire\Nigabyte;

use App\Models\Nigafood;  // Import the Nigafood model
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use App\Models\Nigaprice;



class Index extends Component
{
    use WithPagination, WithoutUrlPagination;

    #[Layout('layouts.app')]
    public function render()
    {
        // Fetch food items and paginate them
        //  return view('livewire.nigabyte.index', [
        //      'foods' => Nigafood::paginate(10)  // Change Student to Nigafood
        // ]);
        return view('livewire.nigabyte.index', [
            'foods' => Nigafood::with('price')->paginate(10)
        ]);
        
    }

    // public function delete($id)
    // {
    //     // Find the food by ID and delete it
    //     $food = Nigafood::find($id);

    //     if ($food) {
    //         $food->delete();
    //         session()->flash('message', 'Food item deleted successfully.');
    //     } else {
    //         session()->flash('error', 'Food item not found.');
    //     }

    //     // Refresh the component to reflect the changes
    //     $this->render();
    // }
    public function delete($id)
{
    // Find the food item by its ID
    $food = Nigafood::find($id);
    
    // Check if the food item exists
    if ($food) {
        // Delete related price first
        Nigaprice::where('nigafood_id', $food->id)->delete();
        
        // Now delete the food item
        $food->delete();
        
        // Flash success message
        session()->flash('message', 'Food deleted successfully!');
    } else {
        session()->flash('error', 'Food not found!');
    }
}

}
