<div>
    <h2>Posts</h2>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <livewire:post-row :key="$post->id" :$post />
            <!-- <tr wire:key="{{ $post-> id }}">
                <td>{{  $post->title  }}</td>
                <td>{{ str($post->content)->words(8) }}</td>
                <td><button type="button" wire:confirm="Are you sure you want to delete this post?"
                 wire:click="delete({{ $post->id }})"
                >delete</button></td>

            </tr> -->
            @endforeach
        </tbody>
    </table>
</div>


</div>
