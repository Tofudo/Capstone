document.addEventListener('DOMContentLoaded', () => {
  const collapseItem = document.querySelector('#collapseBtn');
  const sidebar = document.querySelector('.admin-nav');
  const dashboard = document.querySelector('.admin-body');

  collapseItem.addEventListener('click', () => {
    sidebar.classList.toggle('collapsed');
    dashboard.classList.toggle('collapsed');
  });
});

