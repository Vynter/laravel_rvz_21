
            @csrf
            <div class="form-group">
                <label for="my-input">Nom</label>
                <input id="my-input" class="form-control @error('name')is-invalid

                @enderror" type="text" name="name" placeholder="Rentrez un Nom" value="{{old('name') ?? $client->name}}">
                @error('name')
                     <div class="invalid-feedback">{{$errors->first('name')}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="my-inp">Email</label>
                <input id="my-inp" type="text" name="email" class="form-control @error('email')is-invalid
                @enderror" placeholder="Rentrez un Email" value="{{old('email') ?? $client->email}}">
                 @error('email')
                     <div class="invalid-feedback">{{$errors->first('email')}}</div>
                @enderror
            </div>

            <label>Status</label>
            <div class="form-group">
                <select class="form-select @error('status')is-invalid
                @enderror" name="status">
                    @foreach ($client->getStatusOptions() as $key => $value)
                        <option value="{{$key}}" {{$client->status == $value ? "selected" : ""}}>{{$value}}</option>
                    @endforeach
                </select>
            </div>
            @error('email')
                <div class="invalid-feedback">{{$errors->first('status')}}</div>
            @enderror

            <label for="">Entrepriseid</label>
            <div class="form-group">
                <select class="form-select @error('status')is-invalid
                @enderror" name="entreprise_id">

                @foreach ($entreprises as $ent)
                    <option value="{{$ent->id}}" {{$ent->id == $client->entreprise_id ? "selected" :""}}>{{$ent->name}}</option>
                @endforeach

                </select>
            </div>
            @error('entreprise_id')
                <div class="invalid-feedback">{{$errors->first('entreprise_id')}}</div>
            @enderror

            <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input @error('img')
                    is-invalid
                @enderror" id="validatedCustomFile" name="img">
                <label class="custom-file-label" for="validatedCustomFile">Veuillez choisir un fichier...</label>
                @error('img')
                    <div class="invalid-feedback">{{$errors->first('img') }}</div>
                @enderror
            </div>
            </div>
            <br>
            <br>
