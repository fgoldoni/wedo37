import { useCookie } from './cookie.js'


export function useExitIntent ()  {

    let timeout = null;

    const { setCookie, getCookie } = useCookie()

    const initExitIntent = () => {

        if (!getCookie('exitIntentShown')) {
            timeout= setTimeout(() => {
                document.addEventListener('mouseout', mouseEvent);
            }, 10000);
        }
    }

    const mouseEvent = e => {
        const shouldShowExitIntent =
            !e.toElement &&
            !e.relatedTarget &&
            e.clientY < 10;

        if (shouldShowExitIntent) {
            document.removeEventListener('mouseout', mouseEvent);

            window.Livewire.emit('openModal', 'wedo.modals.popup.wedo')

            if (timeout) {
                clearTimeout(timeout)
            }

            // Set the cookie when the popup is shown to the user
            setCookie('exitIntentShown', true, 30);
        }
    }

    return { initExitIntent }
}
