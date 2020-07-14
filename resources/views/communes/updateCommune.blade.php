<div>
    <a href="{{ url('/') }}"><button>Accueil</button></a>
</div><br><br><br>
<div>
    <form method="post" action="{{ url('/updateCommune', $commune->id)}}">
        <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
        <label>Modifier un Commune</label><br><br>
        <input type="text" placeholder="Name" name="name" value="{{ $commune->name }}"><br><br>
        <select name="region">
            <option value="{{ $commune->region_id }}">{{ $commune->regions->name }}</option>
        
        </select><br><br>
        <button >Update</button>
    </form>
</div>