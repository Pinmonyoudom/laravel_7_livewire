<div>
    <div class="container">
	    <div class="row">
	        <div class="col-md-12">	            
	            <input type="text"  class="form-control" placeholder="Search" wire:model="search" />
	            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
	                <tr>
	                    <th>Name</th>
	                    <th>Phone Number</th>
	                </tr>
	                @foreach($contacts as $contact)
	                <tr>
	                    <td>
	                        {{ $contact->name }}
	                    </td>
	                    <td>
	                        {{ $contact->phone_number }}
	                    </td>
	                </tr>
	                @endforeach
	            </table>
	            {{ $contacts->links('livewire.pagination') }}
	        </div>
	    </div>
	</div>
</div>




