<?php

namespace App\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class AdminContactMessages extends Component
{
    use WithPagination;
    public $modalDeleteVisible = false;
    public $modalBulkDeleteVisible = false;
    public $modalShowMessage = false;
    public $selectedContact;
    public $modelId;

    //bulk delete
    public $selectedMessages = [];
    public $selectAll = false;
    public bool $bulkDisabled = true;


    public function showMessage($contactId)
    {
        $this->selectedContact = Contact::findOrFail($contactId);
        $this->dispatch('open-modal', 'modal-show-message');
    }

    public function deleteMessage()
    {
        Contact::destroy($this->modelId);
        $this->dispatch('close-modal', 'modal-delete');
        session()->flash('message', 'Uspješno ste obrisali poruku korisnika');
    }

    public function deleteSelected()
    {
        Contact::query()
            ->whereIn('id', $this->selectedMessages)
            ->delete();
        $this->selectedMessages = [];
        $this->selectAll = false;
        $this->dispatch('close-modal', 'modal-bulk-delete');
        session()->flash('message', 'Uspješno ste obrisali poruku korisnika');
    }

    public function updatedSelectAll($value)
{
    if ($value) {
        $this->selectedMessages = Contact::orderBy('created_at', 'DESC')
            ->limit(15) // jer koristiš paginate(15)
            ->pluck('id')
            ->toArray();
    } else {
        $this->selectedMessages = [];
    }

    $this->updatedSelectedMessages();
}






// public function updated($name, $value)
// {
//     if ($name === 'selectedMessages' || $name === 'selectAll') {
//         $this->bulkDisabled = count($this->selectedMessages) < 2;
//     }
// }

// public function updatedSelectedMessages()
// {
//     $this->bulkDisabled = count($this->selectedMessages) < 2;
// }

// public function updatedSelectedMessages()
// {
//     logger('selected updated: ' . json_encode($this->selectedMessages));
// }

    // public function createDeleteModal($contact)
    // {
    //     $this->modelId = $contact;
    //     $this->selectedContact = $contact;
    //     $this->modalDeleteVisible = true;
    // }

    public function createDeleteModal($contactId)
{
    $this->modelId = $contactId;
    $this->selectedContact = Contact::findOrFail($contactId);
    $this->dispatch('open-modal', 'modal-delete');
}


    public function createBulkDeleteModal()
    {
        $this->dispatch('open-modal', 'modal-bulk-delete');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        // za bulk delete
      //  $this->bulkDisabled = count($this->selectedMessages) < 2;

        $contacts = Contact::orderBy('created_at', 'DESC')->paginate(15);
        return view('livewire.admin.admin-contact-messages', compact('contacts'));
    }


public function updatedSelectedMessages()
{
    $this->bulkDisabled = count($this->selectedMessages) < 2;
}


}
