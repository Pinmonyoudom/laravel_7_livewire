<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align:center">Contact Form</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="submit">
                                <div class="form-group">
                                    @if (\Session::has('success'))
                                        <div class="alert alert-success">
                                            <ul>
                                                <li>{!! \Session::get('success') !!}</li>
                                            </ul>
                                        </div>
                                        @endif
                                    <label for="name">Name</label>               
                                    <input type="text" name="name" class="form-control" wire:model="name"/>
                                    {{-- <input type="text" name="name" class="form-control" wire:model.lazy="name"/> --}}
                                    {{-- <input type="text" name="name" class="form-control" wire:model.defer="name"/> --}}
                                    {{-- <input type="text" name="name" class="form-control" wire:model.debounce.2500ms="name"/> --}}
                                    {{-- lazy mean when input it not yet show in ajax request,BUT if we put mouse other input will show--}}
                                    {{-- defer mean type and until submit done it will show --}}
                                    {{-- debounce mean delay time to show --}}
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" wire:model="email"/>
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" name="phone" class="form-control" wire:model="phone"/>
                                    @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="msg">Message</label>
                                    <textarea class="form-control" name="msg" wire:model="msg"></textarea>                                   
                                    @error('msg')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>                              
                                <button class="btn btn-success" type="submit">Submit</button>                              
                            </form>                           
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>

</div>
