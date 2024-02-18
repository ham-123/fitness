<div>
    <label for="entraineur">Entraineur</label>
    <select class="form-control" name="entraineur_id" id="entraineur">
        @foreach($entraineurs as $e)
            <option value="{{ $e->id }}">{{ $e->user->nom }} {{ $e->user->prenom }}</option>
        @endforeach
    </select>
</div>
