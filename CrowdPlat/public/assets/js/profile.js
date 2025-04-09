"use strict";

(() => {
    const imageProfile = document.querySelector('.overlay');
    const uploadImageInput = document.querySelector('#uploadProfileImage');
    const imageProfileForm = document.querySelector('.image-profile-form');

    imageProfile.addEventListener('click', () => {
        uploadImageInput.click();
    });

    // Автоматическая отправка формы после выбора файла
    uploadImageInput.addEventListener('change', () => {
        if (uploadImageInput.files.length > 0) {
            imageProfileForm.submit();
        }
    });
})()
