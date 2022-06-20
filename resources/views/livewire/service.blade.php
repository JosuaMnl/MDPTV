        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Layanan</h4>
                </div>
                <div class="card-body">
                    <table class="table align-middle">
                        <thead>
                            <th style="border-bottom-color: white">Layanan</th>
                        </thead>
                        <tbody>
                            @foreach ($orderServices as $index => $orderService)
                                <tr>
                                    <td>
                                        <select name="orderServices[{{ $index }}]['service_categories_id']"
                                            wire:model="orderServices.{{ $index }}.service_categories_id"
                                            id="" class="form-control">
                                            <option value="">-- Pilih Layanan --</option>
                                            @foreach ($allServices as $service)
                                                <option value="{{ $service->id }}">
                                                    {{ $service->nama_layanan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <a class="text-center d-block text-decoration-none" href="#"
                                            wire:click.prevent="removeService({{ $index }})">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <button class="btn btn-md btn-secondary" wire:click.prevent="addService">+ Add Another
                        Service</button>
                </div>
            </div>
        </div>
        <button class="btn btn-md btn-info">Submit</button>
        </form>
        </div>
