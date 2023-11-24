const sidebarTitle = document.querySelectorAll('.sidebar-title');
// alert(sidebarTitle.length);

for (let i = 0; i < sidebarTitle.length; i++){
    sidebarTitle[i].addEventListener('click',
    lockColor.bind(this, sidebarTitle[i]));
}

function lockColor(item) {
    // alert(sidebarTitle.length);
    for (let i = 0; i < sidebarTitle.length; i++){
        sidebarTitle[i].classList.remove('lock-color');
    }
    item.classList.add('lock-color')
}