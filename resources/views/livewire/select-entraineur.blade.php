<div class="form-group">
    <label for="entraineur">Entraineur</label>
    <select class="form-control" name="entraineur_id" id="entraineur" wire:model="entraineurId">
        <option value="">Sélectionnez un entraîneur</option>
        @foreach($entraineurs as $entraineur)
            <option value="{{ $entraineur->id }}">{{ $entraineur->user->nom }} {{ $entraineur->user->prenom }}</option>
        @endforeach
    </select>
</div>
