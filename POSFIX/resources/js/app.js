window.closeModals = () => {
    const openCreateModal = document.querySelector('.filament-modal.filament-modal-is-open[x-data*="createModal"]')
    if (!openCreateModal) {
        Alpine.store('main').closeModals()
    }
}