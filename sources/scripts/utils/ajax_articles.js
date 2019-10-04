const load_section = document.querySelector('#LoadSection')
const load_container = document.querySelector('#LoadContainer')
const load_button = document.querySelector('#LoadButton')

if (load_section && load_container && load_button) {
  const max_pages = load_button.dataset.maxpages
  const max_articles = load_button.dataset.maxarticles
  let paged = 1

  load_button.addEventListener('click', () => {
    paged++

    load_container.classList.add('is-loading')

    fetch('/wp-admin/admin-ajax.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded; charset=utf-8'
      },
      credentials: 'same-origin',
      body: `action=ajax-articles&paged=${paged}&max=${max_articles}`
    })
    .then(data => data.text())
    .then(result => {
      const response = document.implementation.createHTMLDocument("")
      response.body.innerHTML = result
      const elements = Array.from(response.body.querySelectorAll('.ArticleCard'))

      for (const element of elements) {
        load_section.append(element)
      }

      load_container.classList.remove('is-loading')
    })

    if (paged == max_pages) {
      load_container.removeChild(load_button)
    }
  })
}
