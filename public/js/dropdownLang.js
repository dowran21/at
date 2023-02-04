const langDropdown = document.getElementById('langDropdown');
const langDropdownBox = document.getElementById('langDropdownBox');
langDropdown.addEventListener('click',()=>{
    langDropdownBox.classList.toggle('toggleDisplay');
});