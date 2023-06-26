<?php

namespace App\Http\Livewire\Admin\Institute;

use Livewire\Component;
use App\Models\Institute;
use LivewireUI\Modal\ModalComponent;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DeleteMedia extends ModalComponent
{

    public Media $media;
    public Institute $institute;
    public $image, $imageId;
    public $checked = false;

    public function mount(Institute $institute, Media $media)
    {
        $this->media = $media;
        $this->institute = $institute;
    }
    protected $listeners = ['setFeaturedImage', 'deleteMedia', 'sortUp'];

    public function setFeaturedImage()
    {
        $mediaPosition = $this->institute->getMedia('banner')->count();
        $this->institute->clearMediaCollection('featured_image');
        $this->media->copy($this->institute, 'featured_image');
        $this->media->delete();
        $this->forceClose()->closeModal();
        return redirect()->route('institutes.edit', $this->institute->slug)->with('message', 'Media made featured  item successfully.');
    }

    public function sortUp()
    {
        // Delete the media item
        if ($this->media->order_column > 0) {
            $this->media->order_column - 1;
            $this->media->save();
        }


        return redirect()->route('institutes.edit', $this->institute->slug)->with('message', 'Media item deleted successfully.');
    }
    public function deleteMedia()
    {
        // Delete the media item
        if ($this->media) {
            $this->media->delete();
        }

        return redirect()->route('institutes.edit', $this->institute->slug)->with('message', 'Media item deleted successfully.');
    }


    public static function closeModalOnEscape(): bool
    {
        return false;
    }


    public function backup()
    {
        // $media = $this->institute->getMedia('banner')->find($mediaId);

        // if ($media) {
        //     $media->delete();
        // }

    }

    public function render()
    {
        return view('livewire.admin.institute.delete-media');
    }
}
