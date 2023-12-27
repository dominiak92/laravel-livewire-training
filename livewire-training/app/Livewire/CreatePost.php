<?php

namespace App\Livewire;
use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreatePost extends Component
{

    #[Rule('required', message: 'Obowiązkowe pole')]
    #[Rule('min:6', message: 'Tytuł musi mieć minimum 6 znaków')]
    public $title = '';

    #[Rule('required', message: 'Obowiązkowe pole')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->title = '';
        $this->content = '';

        $this->redirect('/posts');
    }


    public function render()
    {
        return view('livewire.create-post');
    }
}
