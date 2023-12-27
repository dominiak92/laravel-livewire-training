<tr>
                <td>{{  $post->title  }}</td>
                <td>{{ str($post->content)->words(8) }}</td>
                <td>
                    <button type="button"
                wire:confirm="Are you sure you want to delete this post?"
                wire:click="$parent.delete({{ $post->id }})"
                >delete</button>

                <button type="button"
                wire:confirm="Are you sure you want to archive this post?"
                wire:click="archive({{ $post->id }})"
                >archive</button>
            </td>

            </tr>
