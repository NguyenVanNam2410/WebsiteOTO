function hientintuc(type,element)
{
    let tabs = document.getElementsByClassName('menu_3');
    for( i = 0 ; i < tabs.length ; i++){
        tabs[i].style.background = 'var(--white-color) ';
        tabs[i].style.color = '#000';
    }

    element.style.background ='#ce1126';
    element.style.color ='var(--white-color)';

    document.getElementById(type).style.display = 'block';

    switch(type){
        case 'tinchung':
            document.getElementById('khuyenmai').style.display = 'none';
            document.getElementById('sukien').style.display = 'none';
            break;
        case 'khuyenmai':
            document.getElementById('tinchung').style.display = 'none';
            document.getElementById('sukien').style.display = 'none';
            break;
        case 'sukien':
            document.getElementById('khuyenmai').style.display = 'none';
            document.getElementById('tinchung').style.display = 'none';
            break;
    }
}
function sanpham(type,element)
{
    let tabs = document.getElementsByClassName('nav_navbar_1');
    for( i = 0 ; i < tabs.length ; i++){
        tabs[i].style.background = 'var(--white-color) ';
    }

    element.style.background ='#ce1126';
    element.style.color ='var(--white-color)';

    document.getElementById(type).style.display = 'block';
    document.getElementById(type).style.display = 'flex';

    switch(type){
        case 'sp1':
            document.getElementById('sp2').style.display = 'none';
            document.getElementById('sp3').style.display = 'none';
            document.getElementById('sp4').style.display = 'none';
            document.getElementById('sp5').style.display = 'none';
            document.getElementById('sp6').style.display = 'none';
            document.getElementById('sp7').style.display = 'none';
            document.getElementById('sp8').style.display = 'none';
            document.getElementById('sp9').style.display = 'none';
            break;
        case 'sp2':
            document.getElementById('sp1').style.display = 'none';
            document.getElementById('sp3').style.display = 'none';
            document.getElementById('sp4').style.display = 'none';
            document.getElementById('sp5').style.display = 'none';
            document.getElementById('sp6').style.display = 'none';
            document.getElementById('sp7').style.display = 'none';
            document.getElementById('sp8').style.display = 'none';
            document.getElementById('sp9').style.display = 'none';
            break;
        case 'sp3':
            document.getElementById('sp2').style.display = 'none';
            document.getElementById('sp1').style.display = 'none';
            document.getElementById('sp4').style.display = 'none';
            document.getElementById('sp5').style.display = 'none';
            document.getElementById('sp6').style.display = 'none';
            document.getElementById('sp7').style.display = 'none';
            document.getElementById('sp8').style.display = 'none';
            document.getElementById('sp9').style.display = 'none';
            break;
        case 'sp4':
            document.getElementById('sp2').style.display = 'none';
            document.getElementById('sp3').style.display = 'none';
            document.getElementById('sp1').style.display = 'none';
            document.getElementById('sp5').style.display = 'none';
            document.getElementById('sp6').style.display = 'none';
            document.getElementById('sp7').style.display = 'none';
            document.getElementById('sp8').style.display = 'none';
            document.getElementById('sp9').style.display = 'none';
            break;
        case 'sp5':
            document.getElementById('sp2').style.display = 'none';
            document.getElementById('sp3').style.display = 'none';
            document.getElementById('sp4').style.display = 'none';
            document.getElementById('sp1').style.display = 'none';
            document.getElementById('sp6').style.display = 'none';
            document.getElementById('sp7').style.display = 'none';
            document.getElementById('sp8').style.display = 'none';
            document.getElementById('sp9').style.display = 'none';
            break;
        case 'sp6':
            document.getElementById('sp2').style.display = 'none';
            document.getElementById('sp3').style.display = 'none';
            document.getElementById('sp4').style.display = 'none';
            document.getElementById('sp5').style.display = 'none';
            document.getElementById('sp1').style.display = 'none';
            document.getElementById('sp7').style.display = 'none';
            document.getElementById('sp8').style.display = 'none';
            document.getElementById('sp9').style.display = 'none';
            break;
        case 'sp7':
            document.getElementById('sp2').style.display = 'none';
            document.getElementById('sp3').style.display = 'none';
            document.getElementById('sp4').style.display = 'none';
            document.getElementById('sp5').style.display = 'none';
            document.getElementById('sp6').style.display = 'none';
            document.getElementById('sp1').style.display = 'none';
            document.getElementById('sp8').style.display = 'none';
            document.getElementById('sp9').style.display = 'none';
            break;
        case 'sp8':
            document.getElementById('sp2').style.display = 'none';
            document.getElementById('sp3').style.display = 'none';
            document.getElementById('sp4').style.display = 'none';
            document.getElementById('sp5').style.display = 'none';
            document.getElementById('sp6').style.display = 'none';
            document.getElementById('sp7').style.display = 'none';
            document.getElementById('sp1').style.display = 'none';
            document.getElementById('sp9').style.display = 'none';
            break;
        case 'sp9':
            document.getElementById('sp2').style.display = 'none';
            document.getElementById('sp3').style.display = 'none';
            document.getElementById('sp4').style.display = 'none';
            document.getElementById('sp5').style.display = 'none';
            document.getElementById('sp6').style.display = 'none';
            document.getElementById('sp7').style.display = 'none';
            document.getElementById('sp8').style.display = 'none';
            document.getElementById('sp1').style.display = 'none';
            break;
    }
}




// let navElement = document.getElementsByClassName('nav_navbar_1');
// console.log(navElement);

// for (i = 0; i < navElement.length; ++i ){
//     // console.log(navElement[i]);
//     navElement.onmouseover = function(e){
//         navElement[i].style.background = 'var(--white-color)';
//     }
//     // navElement.style.background = '#ce1126'
// }

