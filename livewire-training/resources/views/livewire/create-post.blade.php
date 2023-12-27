<div>
    <h2>New Post:</h2>

    <div x-data="{ count: 0 }">
    <span x-text="count"></span>
    <button x-on:click="count++">+</button>
    </div>

    Current Title: <span x-text="$wire.title"></span>
    <button x-on:click="$wire.title = ''">clear title</button>
    <form wire:submit.prevent="save">
        <label>
            <span>Title</span>
            <input type="text" wire:model="title">
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </label>
        <label for="content">Content</label>
        <textarea wire:model="content"></textarea>
        <small>Characters:
            <span x-text="$wire.content.length"></span></small>
        @error('content') <span class="error">{{ $message }}</span> @enderror
        <button type="submit">Save</button>
    </form>
</div>
