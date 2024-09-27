const $ = document.querySelector.bind(document)

function TabNavigation(){
  const html = {
    links: [...$('.tab-links').children],
    contents: [...$('.tab-content').children],
    openTab: $('[data-open]')
  }

  function hideAllTabContent(){
    console.log('hide all content')
    html.contents.forEach(section =>{
      section.style.display = "none"
    })
  }

  function removeAllActiveClass(){
    console.log('remove all active class')
    html.links.forEach(tab => {
      tab.className = tab.className.replace(" active", "")
    })
  }

  function showCurrentTab(id){
    console.log('show current tab: ' + id)
    const tabcontent = $('#' + id)
    tabcontent.style.display = "block"

  }

  function selectTab(event){
    hideAllTabContent()
    removeAllActiveClass()
    console.log('select tab')
    const target = event.currentTarget
    showCurrentTab(target.dataset.id)
    target.className += " active"
  }


  function listenForChange(){
    console.log('listen for change')
    html.links.forEach(tab => {
      tab.addEventListener('click', selectTab)
    })

  }

  function init(){
    hideAllTabContent()
    listenForChange()
    html.openTab.click()
  }

  return{
    init
  }

}

window.addEventListener('load', () => {
  const tabNavigation = TabNavigation()
  tabNavigation.init()
})