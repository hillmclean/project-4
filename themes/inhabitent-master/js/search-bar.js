document.addEventListener('DOMContentLoaded', function () {

  const searchIcon = document.querySelector('.search-toggle')

  searchIcon.addEventListener('click', function () {
    event.preventDefault();
    const search = document.getElementById('search-display');
    if (search.className === 'search-field') {
      search.className = 'search-display-off';
    } else {
      search.className = 'search-field';
    }
  });

}); // end DOM Content Load