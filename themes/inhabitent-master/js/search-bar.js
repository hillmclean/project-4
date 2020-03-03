document.addEventListener("DOMContentLoaded", function () {

  const searchIcon = document.querySelector('.search-toggle')

  searchIcon.addEventListener('click', function () {
    const search = document.getElementById('search-display');
    if (search.className === 'search-display-on') {
      search.className = 'search-display-off';
    } else {
      search.className = 'search-display-on';
    }
  });

}); // end DOM Content Load