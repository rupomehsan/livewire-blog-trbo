<div >
    <div class="w-25 m-auto border p-3 mt-3">
        <h3 class="text-center py-5">Comments</h3>
        @if(session()->has('message'))
          <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <form wire:submit.prevent="addComment" class="d-flex gap-1">
            <input class=" form-control"  wire:model.lazy="comment" placeholder="Enter Comment"/> 
            <button class="btn btn-success" type="submit">Add</button>
        </form>
        @error('comment')
            <p class="text-danger m-2">{{$message}}</p>
            @enderror
        @foreach($comments as $comment)
    <div class="border my-2 p-2">
        <span class="h5">{{$comment->creator->name}}</span>
        <span class="text-secondary  mx-3 my-2">{{$comment->created_at->diffForHumans()}}</span>
        <p>{{$comment->comment}}</p>
    </div>
    @endforeach
    </div>
</div>
