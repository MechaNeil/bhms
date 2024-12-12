<div wire:ignore.self class="modal fade" id="editCompanyModal" tabindex="-1" aria-labelledby="editCompanyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCompanyModalLabel">Edit Company Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="save">
                    <!-- Company Logo -->
                    <div class="mb-3">
                        <label for="companyLogo" class="form-label">Company Logo</label>
                        <input type="file" id="companyLogo" class="form-control" wire:model="company_logo">
                        <div wire:loading wire:target="company_logo" class="text-muted mt-1">Uploading...</div>
                        @if ($company_logo)
                        <img src="{{ $company_logo->temporaryUrl() }}" alt="Company Logo Preview"
                            class="img-thumbnail mt-2" width="150">
                        @elseif(isset($existing_logo))
                        <!-- Assuming $existing_logo is passed from the backend -->
                        <img src="{{ asset('storage/' . $existing_logo) }}" alt="Existing Logo"
                            class="img-thumbnail mt-2" width="150">
                        @endif
                        @error('company_logo') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Company Name -->
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name</label>
                        <input type="text" id="companyName" class="form-control" wire:model.lazy="company_name">
                        @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea id="address" class="form-control" wire:model.lazy="address" rows="2"></textarea>
                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Contact -->
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="text" id="contact" class="form-control" wire:model.lazy="contact_no">
                        @error('contact_no') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Website -->
                    <div class="mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="url" id="website" class="form-control" wire:model.lazy="website">
                        @error('website') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">
                        <span wire:loading wire:target="save" class="spinner-border spinner-border-sm me-1"
                            role="status" aria-hidden="true"></span>
                        Save Changes
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>