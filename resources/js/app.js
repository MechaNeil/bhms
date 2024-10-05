import '@popperjs/core/dist/umd/popper.min.js';
// Import Bootstrap's JavaScript

import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import './bootstrap';

import { OverlayScrollbars } from 'overlayscrollbars';


import 'bootstrap/dist/js/bootstrap.js';


import { Tooltip } from 'bootstrap';

// Initialize tooltips
document.addEventListener('livewire:navigated', function () {
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new Tooltip(tooltipTriggerEl);
  });
});



const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
const Default = {
    scrollbarTheme: "os-theme-light",
    scrollbarAutoHide: "leave",
    scrollbarClickScroll: true,
};


document.addEventListener("livewire:navigated", function() {
    const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
    if (sidebarWrapper) {
        OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
                theme: Default.scrollbarTheme,
                autoHide: Default.scrollbarAutoHide,
                clickScroll: Default.scrollbarClickScroll,
            },
        });
    }
});


// By adding checks like if (element) { ... }, you ensure that the code inside 
// the block only runs if the element exists. 
// This should prevent errors when navigating between pages.

document.addEventListener("livewire:navigated", function() {

    console.log("Navigated Tenants");

    const userName = 'Mak Nel'; // This will come from my database in future, this is for testing
    // Tentants
    // Inject the username into the modal
    const userNamePlaceholder = document.getElementById('user-name-placeholder');
    if (userNamePlaceholder) {
      userNamePlaceholder.innerText = userName;
    }
  
    // validation profile
    const profilePicture = document.getElementById('profilePicture');
    if (profilePicture) {
      
    console.log("Profile Picture Tenants");

      profilePicture.addEventListener('change', function() {
        const allowedTypes = ['image/jpeg', 'image/png'];
        const file = this.files[0];
        if (file && !allowedTypes.includes(file.type)) {
          this.classList.add('is-invalid');
          const profilePictureFeedback = document.getElementById('profilePictureFeedback');
          if (profilePictureFeedback) {
            profilePictureFeedback.style.display = 'block';
          }
        } else {
          this.classList.remove('is-invalid');
          const profilePictureFeedback = document.getElementById('profilePictureFeedback');
          if (profilePictureFeedback) {
            profilePictureFeedback.style.display = 'none';
          }
        }
      });
    }
  
    const proofOfIdentity = document.getElementById('proofOfIdentity');
    if (proofOfIdentity) {
      
    console.log("Profile Id Tenants");

      proofOfIdentity.addEventListener('change', function() {
        const allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
        const file = this.files[0];
        if (file && !allowedTypes.includes(file.type)) {
          this.classList.add('is-invalid');
          const proofOfIdentityFeedback = document.getElementById('proofOfIdentityFeedback');
          if (proofOfIdentityFeedback) {
            proofOfIdentityFeedback.style.display = 'block';
          }
        } else {
          this.classList.remove('is-invalid');
          const proofOfIdentityFeedback = document.getElementById('proofOfIdentityFeedback');
          if (proofOfIdentityFeedback) {
            proofOfIdentityFeedback.style.display = 'none';
          }
        }
      });
    }
  
    // Progress Bar addTenant
    const addTenantForm = document.getElementById('addTenantForm');
    if (addTenantForm) {
      addTenantForm.addEventListener('input', function() {
        const requiredFields = document.querySelectorAll('#addTenantForm [required]');
        const filledFields = Array.from(requiredFields).filter(field => field.value !== '');
        const progress = (filledFields.length / requiredFields.length) * 100;
        const formProgress = document.getElementById('formProgress');
        if (formProgress) {
          formProgress.style.width = progress + '%';
          formProgress.ariaValueNow = progress;
        }
      });
    }
  
    // Progress Bar editTenant
    const editTenantForm = document.getElementById('editTenantForm');
    if (editTenantForm) {
      editTenantForm.addEventListener('input', function() {
        const requiredFields = document.querySelectorAll('#editTenantForm [required]');
        const filledFields = Array.from(requiredFields).filter(field => field.value !== '');
        const progress = (filledFields.length / requiredFields.length) * 100;
        const formProgress2 = document.getElementById('formProgress2');
        if (formProgress2) {
          formProgress2.style.width = progress + '%';
          formProgress2.ariaValueNow = progress;
        }
      });
    }


    // Backup Button functionality
    const backupBtn = document.getElementById('backup-btn');
    if (backupBtn) {
        backupBtn.addEventListener('click', function () {
          console.log("Backup Database");

            // Show progress bar
            const progressBar = document.getElementById('backup-progress');
            const progressBarInner = document.getElementById('progress-bar');
            if (progressBar && progressBarInner) {
                progressBar.classList.remove('d-none');
                progressBarInner.style.width = '0%';

                // Simulate backup process
                let progress = 0;
                const interval = setInterval(function () {
                    progress += 10;
                    progressBarInner.style.width = progress + '%';
                    if (progress >= 100) {
                        clearInterval(interval);
                        // Hide progress bar
                        progressBar.classList.add('d-none');
                        // Show success alert
                        const successAlert = document.getElementById('success-alert');
                        if (successAlert) {
                            successAlert.classList.remove('d-none');
                            // Add download link to alert
                            const downloadLink = document.getElementById('download-link');
                            if (downloadLink) {
                                downloadLink.href = '#';  // Adjust this as needed
                            }
                        }
                    }
                }, 300);
            }
        });
    }

    // Handle Retry Button in Error Alert
    const retryLink = document.getElementById('retry-link');
    if (retryLink) {
        retryLink.addEventListener('click', function () {
            const errorAlert = document.getElementById('error-alert');
            if (errorAlert) {
                errorAlert.classList.add('d-none');
            }
            // Retry the backup process
            if (backupBtn) {
                backupBtn.click();
            }
        });
    }

    

  });

    // for delete requests
    // document.getElementById('deleteTenantButton').addEventListener('click', function() {
    //   // Send a DELETE request to your backend API to delete the tenant
    //   fetch('/api/tenants/' + tenantId, {
    //     method: 'DELETE',
    //   })
    //   .then(response => response.json())
    //   .then(data => {
    //     // Handle the response data
    //     console.log(data);
    //     // Close the modal
    //     var deleteModal = document.getElementById('deleteTenantModal');
    //     var modal = bootstrap.Modal.getInstance(deleteModal);
    //     modal.hide();
    //     // Update the table to reflect the deleted tenant
    //   })
    //   .catch(error => {
    //     console.error('Error deleting tenant:', error);
    //   });
    // });

document.addEventListener('livewire:navigated', () => {
    console.log("Navigated");

});
