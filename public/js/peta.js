// peta script

// button
const halamanPeta = document.querySelector('.data-d-in');
const tombolPilihan = document.querySelectorAll('.pilihan .btn');

const tombols = halamanPeta.querySelectorAll('img');
const wilayahs = halamanPeta.querySelectorAll('svg');

const labels = halamanPeta.querySelectorAll('.peta p');

const icons = halamanPeta.querySelectorAll('.icon');

console.log(icons)

tombolPilihan.forEach(tombol => {

  tombol.addEventListener('click', (e) => {

    tombolPilihan.forEach(tombol => {
      if(tombol.classList.contains('btn-info')) {
        tombol.classList.remove('btn-info');
      }
    });
    
    icons.forEach(icon => {
      if( !icon.classList.contains('hidden') ) {
        icon.classList.add('hidden');
      }
    });

    tombol.classList.add('btn-info');

    console.log(document.querySelector('.' + e.target.value) );
    // const kumpulanButton = halamanPeta.querySelector(e.target.value);
    if( halamanPeta.querySelector('.' + e.target.value) ) {
      halamanPeta.querySelector('.' + e.target.value).classList.remove('hidden');
    }

    // clear shadow setelah klik tombol lain
    tombols.forEach(tombol => {
      if(tombol.classList.contains('animate')) {
        tombol.classList.remove('animate');
      }
    });

    // clear shadow willayah ketika wilayah lain diklik
    wilayahs.forEach(wilayah => {
      if(wilayah.classList.contains('animate')) {
        wilayah.classList.remove('animate');
      }
    });
   
    // clear opacity text ketika text lain diklik
    labels.forEach(label => {
      if(label.classList.contains('animate')) {
        label.classList.remove('animate');
      }
    });

    // if()
  });

});


halamanPeta.addEventListener('click', (e) => {

  if(e.target.classList.contains('tombol')) {

    // clear shadow setelah klik tombol lain
    tombols.forEach(tombol => {
      if(tombol.classList.contains('animate')) {
        tombol.classList.remove('animate');
      }
    });

    // clear shadow willayah ketika wilayah lain diklik
    wilayahs.forEach(wilayah => {
      if(wilayah.classList.contains('animate')) {
        wilayah.classList.remove('animate');
      }
    });
   
    // clear opacity text ketika text lain diklik
    labels.forEach(label => {
      if(label.classList.contains('animate')) {
        label.classList.remove('animate');
      }
    });

    
    e.target.classList.forEach(cls => {
      // if( cls != 'animate' &&  halamanPeta.querySelector( ('.' + cls) ) ) {
        //   halamanPeta.querySelector( ('.' + cls) ).classList.add('animate');
        // }
        if( cls != 'tombol' ) {
          // console.log('.' + cls);
          // console.log(halamanPeta.querySelector(('.' + cls)));          
          if( halamanPeta.querySelector(('svg.' + cls)) ) {
            halamanPeta.querySelector( ('svg.' + cls) ).classList.add('animate');
          }
          if( halamanPeta.querySelector(('p.' + cls)) ) {
            halamanPeta.querySelector( ('p.' + cls) ).classList.add('animate');
          }
        }

    });
      
    e.target.classList.add('animate');

  }

});