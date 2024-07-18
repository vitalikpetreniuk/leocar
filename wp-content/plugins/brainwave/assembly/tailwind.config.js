/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors.js');
const plugin = require('tailwindcss/plugin.js');
const cssnano = require('cssnano');
const cfg = require('./config.json');

module.exports = {
    corePlugins: {
        container: false
    },
    content: [`../../../themes/${cfg.themeName}/**/*.php`], important: false, theme: {
         extend: {
             fontSize: {
                 sm: '0.875rem', // 14px
                 base: '1rem', // 16px
                 xl: '1.125rem', // 18px
                 '2xl': '1.25rem', // 20px
                 '3xl': '1.55rem', // 25px
                 '4xl': '1.625rem', // 26px
                 '5xl': '2.187rem', // 35px
             }, fontFamily: {
                 '400': ['Evolventa-Regular', 'sans-serif'],
                 '700': ['Evolventa-Bold', 'sans-serif'],
             }, colors: {
                 white: '#FAFAFA',
                 black: '#0F0F0F',
                 accent: '#27AC5B',
                 error: '#E31919',
                 car: '#151515',
                 dark: '#212121',
                 condition: '#1F1F1F',
                 'car-active': '#212121',
                 'accent-transparent': 'rgba(39, 172, 91, .2)',
                 'accent-transparent-hover': 'rgba(39, 172, 91, .3)',
                 'button-hover': '#25D366',
             }, screens: {
                 428: '428px',
                 500: '500px',
                 768: '768px',
                 820: '820px',
                 1024: '1024px',
                 1100: '1100px',
                 1280: '1280px',
                 1440: '1440px',
                 1920: '1920px',
                 2000: '2000px',
             }, viewport: {
                 mobile: 320,
                 tablet: 768,
                 desktop: 1100,
             }, flex: {
                 'header': '0 0 auto',
                 'main': '1 0 auto',
                 'footer': '0 0 auto',
             },
        }
    }, plugins: [
        require('tailwindcss'),
        require('autoprefixer'),
        require('cssnano')({
            preset: 'default',
        }),
        plugin(function ({matchUtilities, theme}) {

            matchUtilities({
                "aspect-ratio": (value) => {
                    const styles = value.split("/");
                    const vwDesk = theme("viewport.desktop");
                    return {
                        width: '100%',
                        height: 'fit-content',
                        maxWidth: `${styles[0]}px`,
                        position: 'relative',
                        overflow: 'hidden',
                        '&::before': {
                            content: '""',
                            display: 'block',
                            width: '100%',
                            paddingTop: `${(styles[1] / styles[0]) * 100}%`,
                        },
                        [`@media (min-width: ${vwDesk}px)`]: {
                            maxWidth: `${(styles[0] / vwDesk) * 100}vw`,
                        },
                        'img': {
                            position: 'absolute',
                            left: '0',
                            top: '0',
                            width: '100%',
                            height: '100%',
                            objectFit: 'cover'
                        }
                    };
                },
                "resp": (value) => {
                    const styles = value.split("/");
                    const vwDesk = theme("viewport.desktop");
                    const vwMob = theme("viewport.mobile");

                    if (!styles[2]) {
                        styles.push(styles[1]);
                    }
                    const formula = `calc(${styles[2]}px + ${styles[1] - styles[2]} * ((100vw - ${vwMob}px)/ ${vwDesk - vwMob}))`;

                    switch (styles[0]) {
                        case 'font':
                            return {
                                fontSize: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    fontSize: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'line-height':
                            return {
                                lineHeight: `calc(${styles[1]} / ${styles[2]})`
                            };
                        case 'w-max':
                            return {
                                maxWidth: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    maxWidth: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'w-min':
                            return {
                                minWidth: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    minWidth: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'width':
                            return {
                                width: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    width: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'h-max':
                            return {
                                maxHeight: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    maxWidth: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'h-min':
                            return {
                                minHeight: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    minHeight: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'height':
                            return {
                                height: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    height: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'px':
                            return {
                                paddingLeft: `${formula}`,
                                paddingRight: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    paddingLeft: `${(styles[1] / vwDesk) * 100}vw`,
                                    paddingRight: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'py':
                            return {
                                paddingTop: `${formula}`,
                                paddingBottom: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    paddingTop: `${(styles[1] / vwDesk) * 100}vw`,
                                    paddingBottom: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'pt':
                            return {
                                paddingTop: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    paddingTop: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'pr':
                            return {
                                paddingRight: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    paddingRight: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'pb':
                            return {
                                paddingBottom: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    paddingBottom: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'pl':
                            return {
                                paddingLeft: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    paddingLeft: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'mx':
                            return {
                                marginLeft: `${formula}`,
                                marginRight: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    marginLeft: `${(styles[1] / vwDesk) * 100}vw`,
                                    marginRight: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'my':
                            return {
                                marginTop: `${formula}`,
                                marginBottom: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    marginTop: `${(styles[1] / vwDesk) * 100}vw`,
                                    marginBottom: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'mt':
                            return {
                                marginTop: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    marginTop: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'mr':
                            return {
                                marginRight: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    marginRight: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'mb':
                            return {
                                marginBottom: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    marginBottom: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'ml':
                            return {
                                marginLeft: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    marginLeft: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'gap':
                            return {
                                gap: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    gap: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'gap-x':
                            return {
                                'column-gap': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'column-gap': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'gap-y':
                            return {
                                'row-gap': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'row-gap': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'right':
                            return {
                                'right': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'right': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'left':
                            return {
                                'left': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'left': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'top':
                            return {
                                'top': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'top': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'bottom':
                            return {
                                'bottom': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'bottom': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'svg-size':
                            return {
                                "svg": {
                                    width: `calc(${styles[2]}px + ${styles[1] - styles[2]} * ((100vw - ${vwMob}px)/ ${vwDesk - vwMob}))`,
                                    height: `calc(${styles[4]}px + ${styles[3] - styles[4]} * ((100vw - ${vwMob}px)/ ${vwDesk - vwMob}))`,
                                    [`@media (min-width: ${vwDesk}px)`]: {
                                        width: `${(styles[1] / vwDesk) * 100}vw`,
                                        height: `${(styles[3] / vwDesk) * 100}vw`,
                                    },
                                },
                            };
                        case 'svg-width':
                            return {
                                "svg": {
                                    width: `${formula}`,
                                    [`@media (min-width: ${vwDesk}px)`]: {
                                        width: `${(styles[1] / vwDesk) * 100}vw`,
                                    },
                                },
                            };
                        case 'svg-height':
                            return {
                                "svg": {
                                    height: `${formula}`,
                                    [`@media (min-width: ${vwDesk}px)`]: {
                                        height: `${(styles[1] / vwDesk) * 100}vw`,
                                    },
                                },
                            };
                        case 'translate':
                            return {
                                'transform': `translate(calc(${styles[2]}px + ${styles[1] - styles[2]} * ((100vw - ${vwMob}px)/ ${vwDesk - vwMob})) , calc(${styles[4]}px + ${styles[3] - styles[4]} * ((100vw - ${vwMob}px)/ ${vwDesk - vwMob})))`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'transform': `translate(${(styles[1] / vwDesk) * 100}vw, ${(styles[3] / vwDesk) * 100}vw)`,
                                },
                            };
                        case 'translate-y':
                            return {
                                'transform': `translateY(${formula})`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'transform': `translateY(${(styles[1] / vwDesk) * 100}vw)`,
                                },
                            };
                        case 'translate-x':
                            return {
                                'transform': `translateX(${formula})`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'transform': `translateX(${(styles[1] / vwDesk) * 100}vw)`,
                                },
                            };
                        case 'grid-col':
                            return {
                                'display': `grid`,
                                'grid-template-columns': `repeat(auto-fit, minmax(${styles[1]}px, 1fr))`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'grid-template-columns': `repeat(auto-fit, minmax(${(styles[1] / vwDesk) * 100}vw, 1fr))`,
                                },
                            };
                        case 'basis':
                            if (styles[3]) {
                                return {
                                    'flex-basis': `${formula}`,
                                    'flex-shrink': `${styles[3]}`,
                                    [`@media (min-width: ${vwDesk}px)`]: {
                                        'flex-basis': `${(styles[1] / vwDesk) * 100}vw`,
                                        'flex-shrink': `${styles[3]}`
                                    },
                                };
                            }

                            return {
                                'flex-basis': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'flex-basis': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };

                    }
                },
            })
        })]
}