<?php

namespace App\Livewire\Nigabyte;

use App\Models\Nigafood;
use App\Models\Nigaprice;
use Livewire\Component;

class Createfood extends Component
{
     public $foodId; // For the food item to be edited
    public $name;
    public $description;
    public $price;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'nullable|numeric',
    ];


    
    // Create a new food item
    public function createFood()
    {
        $this->validate();

        // Create the new food item
        $food = Nigafood::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        // If price is provided, save it in the Nigaprice table
        if ($this->price) {
            Nigaprice::create([
                'nigafood_id' => $food->id, 
                'amount' => $this->price,
                'currency' => 'USD', // Or any default currency you'd like
            ]);
        }
        
        // Reset the form fields
        $this->reset();

        // Emit a success message
        session()->flash('message', 'Food created successfully!'); 
        return redirect()->route('foodlist')->with('success', 'Updated successfully');
    }

    public function delete($id)
    {
        // Find the food by ID and delete it
        $food = Nigafood::find($id);

        if ($food) {
            $food->delete();
            session()->flash('message', 'Food item deleted successfully.');
        } else {
            session()->flash('error', 'Food item not found.');
        }

        // Refresh the component to reflect the changes
        $this->render();
    }
    
    public function editFood($id)
{
    // Fetch the food item to edit
    $food = Nigafood::findOrFail($id);
    $this->name = $food->name;
    $this->description = $food->description;
    $this->price = $food->price;
    return view('livewire.nigabyte.editfood', compact('nigabyte'));
}


    public function render()
    {
        return view('livewire.nigabyte.createfood')->layout('layouts.app');
    }
}
