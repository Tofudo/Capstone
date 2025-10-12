document.addEventListener('DOMContentLoaded', () => {
  const collapseItem = document.querySelector('#s-collapseBtn');
  const sidebar = document.querySelector('.staff-nav');
  const dashboard = document.querySelector('.staff-body');

  collapseItem.addEventListener('click', () => {
    sidebar.classList.toggle('collapsed');
    dashboard.classList.toggle('collapsed');
  });
});

