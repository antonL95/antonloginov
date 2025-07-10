import '../css/app.css';

function clamp(number, a, b) {
    let min = Math.min(a, b)
    let max = Math.max(a, b)
    return Math.min(Math.max(number, min), max)
}
document.addEventListener('alpine:init', () => {
    Alpine.data('headerScroll', function(isHomePage) {
        return {
            headerRef: null,
            avatarRef: null,
            isInitial: true,
            upDelay: 64,
            isHomePage: isHomePage,

            removeProperty(property) {
                document.documentElement.style.removeProperty(property)
            },

            setProperty(property, value) {
                document.documentElement.style.setProperty(property, value)
            },

            updateAvatarStyles() {
                if (!this.isHomePage) return;

                let fromScale = 1
                let toScale = 36 / 64
                let fromX = 0
                let toX = 2 / 16
                let downDelay = this.avatarRef ? this.avatarRef.offsetTop : 0

                let scrollY = downDelay - window.scrollY

                let scale = (scrollY * (fromScale - toScale)) / downDelay + toScale
                scale = clamp(scale, fromScale, toScale)

                let x = (scrollY * (fromX - toX)) / downDelay + toX
                x = clamp(x, fromX, toX)

                this.setProperty(
                    '--avatar-image-transform',
                    `translate3d(${x}rem, 0, 0) scale(${scale})`,
                )

                let borderScale = 1 / (toScale / scale)
                let borderX = (-toX + x) * borderScale
                let borderTransform = `translate3d(${borderX}rem, 0, 0) scale(${borderScale})`

                this.setProperty('--avatar-border-transform', borderTransform)
                this.setProperty(
                    '--avatar-border-opacity',
                    scale === toScale ? '1' : '0',
                )
            },

            updateHeaderStyles() {
                if (!this.headerRef) {
                    return
                }

                let downDelay = this.avatarRef ? this.avatarRef.offsetTop : 0

                let { top, height } = this.headerRef.getBoundingClientRect()
                let scrollY = clamp(
                    window.scrollY,
                    0,
                    document.body.scrollHeight - window.innerHeight,
                )

                if (this.isInitial) {
                    this.setProperty('--header-position', 'sticky')
                }

                this.setProperty('--content-offset', `${downDelay}px`)

                if (this.isInitial || scrollY < downDelay) {
                    this.setProperty('--header-height', `${downDelay + height}px`)
                    this.setProperty('--header-mb', `${-downDelay}px`)
                } else if (top + height < -this.upDelay) {
                    let offset = Math.max(height, scrollY - this.upDelay)
                    this.setProperty('--header-height', `${offset}px`)
                    this.setProperty('--header-mb', `${height - offset}px`)
                } else if (top === 0) {
                    this.setProperty('--header-height', `${scrollY + height}px`)
                    this.setProperty('--header-mb', `${-scrollY}px`)
                }

                if (top === 0 && scrollY > 0 && scrollY >= downDelay) {
                    this.setProperty('--header-inner-position', 'fixed')
                    this.removeProperty('--header-top')
                    this.removeProperty('--avatar-top')
                } else {
                    this.removeProperty('--header-inner-position')
                    this.setProperty('--header-top', '0px')
                    this.setProperty('--avatar-top', '0px')
                }
            },

            updateStyles() {
                this.updateHeaderStyles()
                this.updateAvatarStyles()
                this.isInitial = false
            },

            init() {
                this.headerRef = this.$el.querySelector('[x-ref="avatarHeader"]')
                this.avatarRef = this.$el.querySelector('[x-ref="avatar"]')

                this.updateStyles()
            }
        }
    })
})
