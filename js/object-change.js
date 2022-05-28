const deviceData = [
    {
        number_section: 3,
        name: "iPhone SE",
        price: "429",
        description: "The iPhone SE is a series of budget smartphones, part of the iPhone family designed by Apple.",
        specification: [{unu: '4.7',doi: 'inch',trei: 'Display'},
                        {unu: '4',doi: 'core',trei: 'GPU'},
                        {unu: '15',doi: 'hours',trei: 'Batery'},
                        {unu: 'Touch',doi: 'ID',trei: 'Unlock'}],
        bg_image: ["linear-gradient(315deg, #26264d 0%, #1b1b47 74%)",
                   "linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)",
                   "linear-gradient(315deg, #ff81a0 0%, #fa6288 74%)"],
        src: ["url(assets/iphoneSE/iphone-se-midnight-select.png)",
              "url(assets/iphoneSE/iphone-se-starlight-select.png)",
              "url(assets/iphoneSE/iphone-se-red-select.png)"]
    },
    {
        number_section: 6,
        name: "iPhone 12",
        price: "599",
        description: "The iPhone 12 and iPhone 12 Mini (stylized and marketed as iPhone 12 mini) are a range of smartphones designed, developed, and marketed by Apple Inc. They are the fourteenth-generation, affordable flagship iPhones, succeeding the iPhone 11.[18] They were unveiled at a virtually held Apple Special Event at Apple Park in Cupertino, California on October 13, 2020, alongside the premium flagship iPhone 12 Pro and iPhone 12 Pro Max.",
        specification: [{unu: '6.1',doi: 'inch',trei: 'Display'},
                        {unu: '4',doi: 'core',trei: 'GPU'},
                        {unu: '17',doi: 'hours',trei: 'Batery'},
                        {unu: 'Face',doi: 'ID',trei: 'Unlock'}],
        bg_image: ["linear-gradient(315deg, #6bffd3 0%, #0cfab3 74%)",
                   "linear-gradient(315deg, #c5a1f7 0%, #bc8cff 74%)",
                   "linear-gradient(315deg, #7472fc 0%, #5c59ff 74%)",
                   "linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)",
                   "linear-gradient(315deg, #ff81a0 0%, #fa6288 74%)"],
        src: ["url(assets/iPhone12/iphone-12-green-select.png)",
              "url(assets/iPhone12/iphone-12-purple-select.png)",
              "url(assets/iPhone12/iphone-12-blue-select.png)",
              "url(assets/iPhone12/iphone-12-white-select.png)",
              "url(assets/iPhone12/iphone-12-black-select.png)",
              "url(assets/iPhone12/iphone-12-red-select.png)"]
    },
    {
        number_section: 6,
        name: "iPhone 11",
        price: "499",
        description: "The iPhone 11 is a smartphone designed, developed, and marketed by Apple Inc. It is the 13th generation of iPhone, succeeding the iPhone XR, and was unveiled on September 10, 2019 alongside the iPhone 11 Pro at the Steve Jobs Theater in Apple Park, Cupertino, by Apple CEO Tim Cook. Preorders began on September 13, 2019, and the phone was officially released on September 20, 2019, one day after the official public release of iOS 13.",
        specification: [{unu: '6.1',doi: 'inch',trei: 'Display'},
                        {unu: '4',doi: 'core',trei: 'GPU'},
                        {unu: '17',doi: 'hours',trei: 'Batery'},
                        {unu: 'Face',doi: 'ID',trei: 'Unlock'}],
        bg_image: ["linear-gradient(315deg, #6bffd3 0%, #0cfab3 74%)",
                   "linear-gradient(315deg, #c5a1f7 0%, #bc8cff 74%)",
                   "linear-gradient(315deg, #fadf96 0%, #fcd874 74%)",
                   "linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)",
                   "linear-gradient(315deg, #ff81a0 0%, #fa6288 74%)"],
        src: ["url(assets/iPhone11/iphone11-green-select.png)",
              "url(assets/iPhone11/iphone11-purple-select.png)",
              "url(assets/iPhone11/iphone11-yellow-select.png)",
              "url(assets/iPhone11/iphone11-white-select.png)",
              "url(assets/iPhone11/iphone11-black-select.png)",
              "url(assets/iPhone11/iphone11-red-select.png)"]
    },
    {
        number_section: 5,
        name: "iPad Air",
        price: "599",
        description: "The iPad Air is a tablet designed, developed, and marketed by Apple Inc. It was announced on October 22, 2013, and was released on November 1, 2013. Part of the iPad line of tablet computers, the iPad Air features a thinner design than its predecessors with similarities to the contemporaneous iPad Mini 2.",
        specification: [{unu: '10.9',doi: 'inch',trei: 'Display'},
                        {unu: '12',doi: 'MP',trei: 'Camera'},
                        {unu: 'M1',doi: 'chip',trei: 'Proesor'},
                        {unu: '5',doi: 'G',trei: 'cellular'}],
        bg_image: ["linear-gradient(315deg, #c5a1f7 0%, #bc8cff 74%)",
                   "linear-gradient(315deg, #b048e0 0%, #c748e0 74%)",
                   "linear-gradient(315deg, #fff5c4 0%, #f7efa6 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)",
                   "linear-gradient(315deg, #3e6dc9 0%, #3e5fc9 74%)"],
        src: ["url(assets/iPadAir/ipad-air-select-wifi-purple.png)",
              "url(assets/iPadAir/ipad-air-select-wifi-pink.png)",
              "url(assets/iPadAir/ipad-air-select-wifi-starlight.png)",
              "url(assets/iPadAir/ipad-air-select-wifi-spacegray.png)",
              "url(assets/iPadAir/ipad-air-select-wifi-blue.png)"]
    },
    {
        number_section: 2,
        name: "iPad Pro",
        price: "799",
        description: "iPad Pro is a premium professional sub-lineup of the iPad tablet computers by Apple Inc. It runs iPadOS, an optimized derivation from the predecessor iOS. The original iPad Pro was introduced in September 2015 which was originally based in iOS 9; the second generation, unveiled in June 2017, made uses of an upgraded A10X Fusion chip with an extended 10.5-inch screen display.",
        specification: [{unu: '12.9',doi: 'inch',trei: 'Display'},
                        {unu: '12',doi: 'MP',trei: 'Camera'},
                        {unu: 'M1',doi: 'chip',trei: 'Proesor'},
                        {unu: '5',doi: 'G',trei: 'cellular'}],
        bg_image: ["linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/iPadPro/ipad-pro-11-select-cell-silver.png)",
              "url(assets/iPadPro/ipad-pro-11-select-cell-spacegray.png)"]
    },
    {
        number_section: 2,
        name: "iPad",
        price: "329",
        description: "The iPad is a brand of iOS and iPadOS-based tablet computers that are developed by Apple Inc. The iPad was conceived before the related iPhone but the iPhone was developed and released first. Speculation about the development, operating system, and release of the original iPad began in 2002 prior to its introduction on January 20, 2010. The iPad range consists of the original iPad lineup and the flagship products iPad Mini, iPad Air, and iPad Pro.",
        specification: [{unu: '10.2',doi: 'inch',trei: 'Display'},
                        {unu: '12',doi: 'MP',trei: 'Camera'},
                        {unu: 'A13',doi: 'Bionic',trei: 'Proesor'},
                        {unu: '4G',doi: 'LTE',trei: 'cellular'}],
        bg_image: ["linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/iPad/ipad-2021-hero-silver-wifi.png)",
              "url(assets/iPad/ipad-2021-hero-space-wifi.png)"]
    },
    {
        number_section: 4,
        name: "iPad Mini",
        price: "499",
        description: "The iPad Mini (branded and marketed as iPad mini) is a line of mini tablet computers designed, developed, and marketed by Apple Inc. It is a sub-series of the iPad line of tablets, with screen sizes of 7.9 inches and 8.3 inches.",
        specification: [{unu: '8.3',doi: 'inch',trei: 'Display'},
                        {unu: '12',doi: 'MP',trei: 'Camera'},
                        {unu: 'A15',doi: 'Bionic',trei: 'Proesor'},
                        {unu: '5G',doi: 'LTE',trei: 'cellular'}],
        bg_image: ["linear-gradient(315deg, #c5a1f7 0%, #bc8cff 74%)",
                   "linear-gradient(315deg, #b048e0 0%, #c748e0 74%)",
                   "linear-gradient(315deg, #fff5c4 0%, #f7efa6 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/iPadMini/ipad-mini-select-wifi-purple-202109.png)",
              "url(assets/iPadMini/ipad-mini-select-wifi-pink-202109.png)",
              "url(assets/iPadMini/ipad-mini-select-wifi-starlight-202109.png)",
              "url(assets/iPadMini/ipad-mini-select-wifi-space-gray-202109.png)"]
    },
    {
        number_section: 3,
        name: "Xiaomi 12 Pro",
        price: "1050",
        description: "AMOLED display with 6.73 inch WQHD + diagonal and 120 Hz refresh rate provides a clear, bright and fluid viewing experience. The camera is equipped with 3 50MP lenses, improved film technology and night mode. HDR function and 4K video recording, 60 fps, can easily capture detailed images with just 0.02 lux light. Xiaomi 12 Pro has a 4-speaker audio system with dual tweeters and woofers from Harman / Cardon.",
        specification: [{unu: '6.73',doi: 'inch',trei: 'Display'},
                        {unu: '50',doi: 'MP',trei: 'Camera'},
                        {unu: '8',doi: 'GB',trei: 'RAM'},
                        {unu: 'Adreno',doi: '730',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #3eadc9 0%, #0ea2c7 74%)",
                   "linear-gradient(315deg, #4b4b73 0%, #434470 74%)",
                   "linear-gradient(315deg, #dc95fc 0%, #e2a3ff 74%)"],
        src: ["url(assets/Xiaomi12Pro/Xiaomi-12-Pro-Blue.png)",
              "url(assets/Xiaomi12Pro/Xiaomi-12-pro-Grey.png)",
              "url(assets/Xiaomi12Pro/Xiaomi-12-Pro-Purple.png)"]
    },
    {
        number_section: 3,
        name: "Xiaomi 12",
        price: "870",
        description: "6.28-inch AMOLED screen with Dolby Vision technology. Brightness adjusts automatically to enhance eye comfort when you switch from a darker environment to a brighter one or vice versa. Harman / Kardon speakers with Dolby Atmos sound technology and symmetrical structure create a more captivating, fluid sound experience and high quality.Xiaomi 12 adopts a completely new focusing technology, with algorithms for learning and tracking the subject in the picture.",
        specification: [{unu: '6.28',doi: 'inch',trei: 'Display'},
                        {unu: '50',doi: 'MP',trei: 'Camera'},
                        {unu: '8',doi: 'GB',trei: 'RAM'},
                        {unu: 'Adreno',doi: '730',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #3eadc9 0%, #0ea2c7 74%)",
                   "linear-gradient(315deg, #4b4b73 0%, #434470 74%)",
                   "linear-gradient(315deg, #dc95fc 0%, #e2a3ff 74%)"],
        src: ["url(assets/Xiaomi12Pro/Xiaomi-12-Pro-Blue.png)",
              "url(assets/Xiaomi12Pro/Xiaomi-12-pro-Grey.png)",
              "url(assets/Xiaomi12Pro/Xiaomi-12-Pro-Purple.png)"]
    },
    {
        number_section: 4,
        name: "Xiaomi 11 lite NE",
        price: "370",
        description: "Xiaomi 11 Lite 5G NE mobile was launched on 15th September 2021. The phone comes with a 90 Hz refresh rate 6.55-inch touchscreen display offering a resolution of 1080x2400 pixels and an aspect ratio of 20:9. Xiaomi 11 Lite 5G NE is powered by an octa-core Qualcomm Snapdragon 778G processor. It comes with 6GB of RAM. The Xiaomi 11 Lite 5G NE runs Android 11 and is powered by a 4250mAh battery. The Xiaomi 11 Lite 5G NE supports proprietary fast charging.",
        specification: [{unu: '6.55',doi: 'inch',trei: 'Display'},
                        {unu: '64',doi: 'MP',trei: 'Camera'},
                        {unu: '8',doi: 'GB',trei: 'RAM'},
                        {unu: 'Adreno',doi: '642L',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)",
                   "linear-gradient(315deg, #e8d1a7 0%, #e6c995 74%)",
                   "linear-gradient(315deg, #b3e8f2 0%, #9bddeb 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/Xiaomi11liteNE/white.png)",
              "url(assets/Xiaomi11liteNE/orange.png)",
              "url(assets/Xiaomi11liteNE/blue.png)",
              "url(assets/Xiaomi11liteNE/black.png)"]
    },
    {
        number_section: 3,
        name: "Redmi 10",
        price: "200",
        description: "One of the most popular mid-range series globally, the Redmi Note, recently got an upgrade. We've already reviewed the Redmi Note 10 Pro and found it to be an excellent handset, so it's now time to turn our heads to the vanilla Note 10. We are talking about the non-5G version here, though.",
        specification: [{unu: '6.43',doi: 'inch',trei: 'Display'},
                        {unu: '48',doi: 'MP',trei: 'Camera'},
                        {unu: '6',doi: 'GB',trei: 'RAM'},
                        {unu: 'Adreno',doi: '612',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #2b2b2b 0%, #171717 74%)",
                   "linear-gradient(315deg, #b3e8f2 0%, #9bddeb 74%)",
                   "linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)"],
        src: ["url(assets/Redmi10/black.png)",
              "url(assets/Redmi10/blue.png)",
              "url(assets/Redmi10/white.png)"]
    },
    {
        number_section: 3,
        name: "Galaxy Fold 3",
        price: "2200",
        description: "We could have sworn that Samsung's original plunge into foldable displays was not that long ago. It definitely feels that way. Yet, here we are with the latest and greatest Z Fold3 - a third-generation product, or perhaps even fourth, depending on how you count the initial failed Fold launch back in the day. Foldables are maturing and already a staple, of sorts, within Samsung's lineup. In fact, the Korean giant has now been consistently delivering Fold devices on a yearly schedule, and this year, it came at the expense of the new Galaxy Note lineup. Oh, how the tables have turned.",
        specification: [{unu: '7.6',doi: 'inch',trei: 'Display'},
                        {unu: '12',doi: 'MP',trei: 'Camera'},
                        {unu: '12',doi: 'GB',trei: 'RAM'},
                        {unu: 'Adreno',doi: '660',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #364935 0%, #425c41 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)",
                   "linear-gradient(315deg, #f5f5f5 0%, #f9defc 74%)"],
        src: ["url(assets/GalaxyFold3/green.png)",
              "url(assets/GalaxyFold3/black.png)",
              "url(assets/GalaxyFold3/pink-white.png)"]
    },
    {
        number_section: 4,
        name: "Galaxy S22 Ultra",
        price: "1400",
        description: "The Note that isn't a Note, yet it may very well end up being the last Note - Samsung's Galaxy S22 Ultra has some big shoes to fill. Attempting to appeal to both productivity-focused stylus lovers and photography enthusiasts, the latest Ultra will either be the ultimate phone, period, or fall short for either group in some way. We're here to find out which one is it.",
        specification: [{unu: '6.8',doi: 'inch',trei: 'Display'},
                        {unu: '108',doi: 'MP',trei: 'Camera'},
                        {unu: '12',doi: 'GB',trei: 'RAM'},
                        {unu: 'Xclipse',doi: '920',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #3b1e2e 0%, #421d32 74%)",
                   "linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)",
                   "linear-gradient(315deg, #364935 0%, #425c41 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/GalaxyS22Ultra/purple.png)",
              "url(assets/GalaxyS22Ultra/white.png)",
              "url(assets/GalaxyS22Ultra/green.png)",
              "url(assets/GalaxyS22Ultra/black.png)"]
    },
    {
        number_section: 4,
        name: "Galaxy S21 G991",
        price: "1000",
        description: "For the second year in a row, Samsung unveils three phones as part of the spring flagship roster (even though it's very much winter this time around, at least where we are). And, much like last time, there's a very clear divide between the ultimate uncompromising Ultra and the two more restrained and down-to-earth 'regular' S phones. If anything, the gap has even widened.",
        specification: [{unu: '6.2',doi: 'inch',trei: 'Display'},
                        {unu: '64',doi: 'MP',trei: 'Camera'},
                        {unu: '8',doi: 'GB',trei: 'RAM'},
                        {unu: 'Mali-G78',doi: 'MP14',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #e386cd 0%, #e3c5aa 74%)",
                   "linear-gradient(315deg, #f5f5f5 0%, #c9c7c7 74%)",
                   "linear-gradient(315deg, #e3c5aa 0%, #ffd7b3 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/GalaxyS21/purple-orange.png)",
              "url(assets/GalaxyS21/white-gray.png)",
              "url(assets/GalaxyS21/orange.png)",
              "url(assets/GalaxyS21/black.png)"]
    },
    {
        number_section: 2,
        name: "HUAWEI P50 Pocket",
        price: "1550",
        description: "Easier on your pocket in more ways than one, the Huawei P50 Pocket is the company's latest foldable, and this one is available globally for a change. In contrast to last year's Mate X2, the Pocket will be sold outside of China, and its EUR1300 starting price can almost pass for reasonable, plus it's the other type of form factor that you might also call compact.",
        specification: [{unu: '6.9',doi: 'inch',trei: 'Display'},
                        {unu: '40',doi: 'MP',trei: 'Camera'},
                        {unu: '8',doi: 'GB',trei: 'RAM'},
                        {unu: 'Adreno',doi: '660',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #fae9cf 0%, #fae5c5 74%)",
                   "linear-gradient(315deg, #f5f5f5 0%, #c9c7c7 74%)"],
        src: ["url(assets/HuaweiP50Pocket/gold.png)",
              "url(assets/HuaweiP50Pocket/white.png)"]
    },
    {
        number_section: 2,
        name: "Huawei Nova 9",
        price: "650",
        description: "The Huawei nova series is intended for the younger generation with flashy looks and relatively low prices. The nova 9 family isn't far from the original formula. We got the vanilla nova 9 for this review, but the Pro model seems to be only slightly different - it has a bigger display, a smaller battery with faster charging and a secondary selfie camera. Sadly, only the standard nova 9 is making its way to the international market leaving the Pro to be a China-exclusive.",
        specification: [{unu: '6.57',doi: 'inch',trei: 'Display'},
                        {unu: '50',doi: 'MP',trei: 'Camera'},
                        {unu: '8',doi: 'GB',trei: 'RAM'},
                        {unu: 'Adreno',doi: '642L',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #a5b7f0 0%, #8a96bf 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/HuaweiNova9/blue.png)",
              "url(assets/HuaweiNova9/black.png)"]
    },
    {
        number_section: 3,
        name: "Huawei P30 Pro",
        price: "800",
        description: "The Huawei nova series is intended for the younger generation with flashy looks and relatively low prices. The nova 9 family isn't far from the original formula. We got the vanilla nova 9 for this review, but the Pro model seems to be only slightly different - it has a bigger display, a smaller battery with faster charging and a secondary selfie camera. Sadly, only the standard nova 9 is making its way to the international market leaving the Pro to be a China-exclusive.",
        specification: [{unu: '6.47',doi: 'inch',trei: 'Display'},
                        {unu: '40',doi: 'MP',trei: 'Camera'},
                        {unu: '8',doi: 'GB',trei: 'RAM'},
                        {unu: 'Mali-G76',doi: 'MP10',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #a5b7f0 0%, #8a96bf 74%)",
                   "linear-gradient(315deg, #ff81a0 0%, #fa6288 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/HuaweiP30Pro/blue.png)",
              "url(assets/HuaweiP30Pro/red.png)",
              "url(assets/HuaweiP30Pro/black.png)"]
    },
    {
        number_section: 3,
        name: "Galaxy Tab S8 Ultra",
        price: "1600",
        description: "The Samsung Galaxy Tab S8 is a series of Android-based tablets designed, developed and marketed by Samsung Electronics. Unveiled at Samsung's Galaxy Unpacked event on 9 February 2022, they serve as the successor to the Galaxy Tab S7 series.",
        specification: [{unu: '14.7',doi: 'inch',trei: 'Display'},
                        {unu: '13',doi: 'MP',trei: 'Camera'},
                        {unu: '16',doi: 'GB',trei: 'RAM'},
                        {unu: 'Adreno',doi: '730',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #302822 0%, #362b24 74%)",
                   "linear-gradient(315deg, #ecc7fc 0%, #e8b5ff 74%)",
                   "linear-gradient(315deg, #f5f5f5 0%, #c9c7c7 74%)"],
        src: ["url(assets/GalaxyTabS8Ultra/graphite.png)",
              "url(assets/GalaxyTabS8Ultra/pink.png)",
              "url(assets/GalaxyTabS8Ultra/white.png)"]
    },
    {
        number_section: 2,
        name: "Galaxy Tab A7 Lite",
        price: "250",
        description: "Galaxy Tab A7 Lite carries more power than you'd expect in a device this sleek. The 5,100 mAh* battery gives you the freedom to forget about the charger for long periods of time when you have somewhere to go or lots to watch. The Galaxy Tab A7 Lite camera is ready to capture and share your moment. Whether you're looking to capture stunning portraits or breathtaking scenery, this device has you covered. With 8MP main camera your memories stay vivid, bright, and clear.",
        specification: [{unu: '8.7',doi: 'inch',trei: 'Display'},
                        {unu: '8',doi: 'MP',trei: 'Camera'},
                        {unu: '4',doi: 'GB',trei: 'RAM'},
                        {unu: 'PowerVR',doi: 'GE8320',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/GalaxyTabA7Lite/white.png)",
              "url(assets/GalaxyTabA7Lite/black.png)"]
    },
    {
        number_section: 3,
        name: "Galaxy Tab S6 Lite",
        price: "400",
        description: "Galaxy Tab A7 Lite carries more power than you'd expect in a device this sleek. The 5,100 mAh* battery gives you the freedom to forget about the charger for long periods of time when you have somewhere to go or lots to watch. The Galaxy Tab A7 Lite camera is ready to capture and share your moment. Whether you're looking to capture stunning portraits or breathtaking scenery, this device has you covered. With 8MP main camera your memories stay vivid, bright, and clear.",
        specification: [{unu: '10.4',doi: 'inch',trei: 'Display'},
                        {unu: '8',doi: 'MP',trei: 'Camera'},
                        {unu: '4',doi: 'GB',trei: 'RAM'},
                        {unu: 'Mali-G72',doi: 'MP3',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #6fadc7 0%, #69a0b8 74%)",
                   "linear-gradient(315deg, #eed7fa 0%, #edcffc 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/GalaxyTabS6Lite/blue.png)",
              "url(assets/GalaxyTabS6Lite/pink.png)",
              "url(assets/GalaxyTabS6Lite/black.png)"]
    },
    {
        number_section: 2,
        name: "Huawei MatePad Pro",
        price: "600",
        description: "You are going to hear that it's a new dawn for Huawei thanks to the first public release of HarmonyOS. And the new MatePad tablets are supposed to usher Huawei's products into a Harmony era and drop Android for good. But underneath all this PR talk everything boils down to one thing - can Harmony-operated devices rival Android's and Apple's? We have the MediaPad Pro 12.6 for a review today, and that's what we are going to try and find out.",
        specification: [{unu: '12.6',doi: 'inch',trei: 'Display'},
                        {unu: '13',doi: 'MP',trei: 'Camera'},
                        {unu: '12',doi: 'GB',trei: 'RAM'},
                        {unu: 'Mali-G78',doi: 'MP24',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #364935 0%, #425c41 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/HuaweiMatePadPro/green.png)",
              "url(assets/HuaweiMatePadPro/black.png)"]
    },
    {
        number_section: 3,
        name: "Huawei MatePad 11",
        price: "470",
        description: "You are going to hear that it's a new dawn for Huawei thanks to the first public release of HarmonyOS. And the new MatePad tablets are supposed to usher Huawei's products into a Harmony era and drop Android for good. But underneath all this PR talk everything boils down to one thing - can Harmony-operated devices rival Android's and Apple's? We have the MediaPad Pro 12.6 for a review today, and that's what we are going to try and find out.",
        specification: [{unu: '10.95',doi: 'inch',trei: 'Display'},
                        {unu: '13',doi: 'MP',trei: 'Camera'},
                        {unu: '12',doi: 'GB',trei: 'RAM'},
                        {unu: 'Adreno',doi: '650',trei: 'GPU'}],
        bg_image: ["linear-gradient(315deg, #364935 0%, #425c41 74%)",
                   "linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)",
                   "linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/HuaweiMatePad11/green.png)",
              "url(assets/HuaweiMatePad11/white.png)",
              "url(assets/HuaweiMatePad11/black.png)"]
    },
    {
        number_section: 1,
        name: "Huawei MatePad Paper",
        price: "800",
        description: "The Huawei MatePad Pro is an Android-based tablet designed and marketed by Huawei as part of their Huawei Mate series. It was announced on November 25, 2019 and was released on December 12, 2019.",
        specification: [{unu: '10.3',doi: 'inch',trei: 'Display'},
                        {unu: 'HarmonyOS',doi: '2',trei: 'OS'},
                        {unu: '64',doi: 'GB',trei: 'ROM'},
                        {unu: 'HUAWEI Kirin',doi: '820E',trei: 'CPU'}],
        bg_image: ["linear-gradient(315deg, #2b2b2b 0%, #171717 74%)"],
        src: ["url(assets/HuaweiMatePadPaper/black.png)"]
    },
    {
        number_section: 5,
        name: "iPhone 13 Pro",
        price: "999",
        description: "The Huawei MatePad Pro is an Android-based tablet designed and marketed by Huawei as part of their Huawei Mate series. It was announced on November 25, 2019 and was released on December 12, 2019.",
        specification: [{unu: '6.7',doi: 'inch',trei: 'Display'},
                        {unu: '5',doi: 'core',trei: 'CPU'},
                        {unu: '28',doi: 'hours',trei: 'Batery'},
                        {unu: 'Face',doi: 'ID',trei: 'Unlock'}],
        bg_image: ["llinear-gradient(315deg, #364935 0%, #425c41 74%)",
                   "linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)",
                   "linear-gradient(315deg, #fcf5d0 0%, #fff2b0 74%)",
                   "linear-gradient(315deg, #8b8b8b 0%, #636363 74%)",
                   "linear-gradient(315deg, #9ae2ff 0%, #58c1eb 74%)"],
        src: ["url(assets/iPhone13/iphone-13-pro-family.png)",
              "url(assets/iPhone13/iphone-13-pro-silver.png)",
              "url(assets/iPhone13/iphone-13-pro-max-gold.png)",
              "url(assets/iPhone13/iphone-13-pro-graphite.png)",
              "url(assets/iPhone13/iphone-13-pro-blue.png)"]
    },
    {
        number_section: 6,
        name: "iPhone 13",
        price: "699",
        description: "The iPhone 13 and iPhone 13 Mini (stylized as iPhone 13 mini) are smartphones designed, developed, marketed, and sold by Apple Inc. They are the fifteenth generation of iPhones (succeeding the iPhone 12 and iPhone 12 Mini). They were unveiled at an Apple Event in Apple Park in Cupertino, California on September 14, 2021, alongside the higher priced iPhone 13 Pro and iPhone 13 Pro Max flagships. Pre-orders for the iPhone 13 and iPhone 13 Mini began on September 17, 2021. They were officially released on September 24, 2021.",
        specification: [{unu: '6.1',doi: 'inch',trei: 'Display'},
                        {unu: '4',doi: 'core',trei: 'CPU'},
                        {unu: '19',doi: 'hours',trei: 'Batery'},
                        {unu: 'Face',doi: 'ID',trei: 'Unlock'}],
        bg_image: ["linear-gradient(315deg, #364935 0%, #425c41 74%)",
                   "linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)",
                   "linear-gradient(315deg, #f2d0fc 0%, #eeb6ff 74%)",
                   "linear-gradient(315deg, #26264d 0%, #1b1b47 74%)",
                   "linear-gradient(315deg, #9ae2ff 0%, #58c1eb 74%)",
                   "linear-gradient(315deg, #ff81a0 0%, #fa6288 74%)"],
        src: ["url(assets/iphone13-2cam/iphone-13-green-select.png)",
              "url(assets/iphone13-2cam/iphone-13-starlight-select-2021.png)",
              "url(assets/iphone13-2cam/iphone-13-pink-select-2021.png)",
              "url(assets/iphone13-2cam/iphone-13-midnight-select-2021.png)",
              "url(assets/iphone13-2cam/iphone-13-blue-select-2021.png)",
              "url(assets/iphone13-2cam/iphone-13-red-select-2021.png)"]
    }
    
];

function reducere(m){
    return Math.round(parseInt(m)-(parseInt(m) * 0.1));
}

function general(n){
    document.querySelector('h2').textContent = deviceData[n].name;
    document.querySelector('h3').innerHTML = `
    $${reducere(deviceData[n].price)} <span>$${deviceData[n].price}</span>`;

    document.querySelector('#descriere').innerHTML = deviceData[n].description;
    document.querySelector('.accor-2').innerHTML =` <div class="section-inline">
        <p><span>${deviceData[n].specification[0].unu}</span>${deviceData[n].specification[0].doi} <br>${deviceData[n].specification[0].trei}</p>
        </div>
        <div class="section-inline">
        <p><span>${deviceData[n].specification[1].unu}</span>${deviceData[n].specification[1].doi} <br>${deviceData[n].specification[1].trei}</p>
        </div>
        <div class="section-inline">
        <p><span>${deviceData[n].specification[2].unu}</span>${deviceData[n].specification[2].doi} <br>${deviceData[n].specification[2].trei}</p>
        </div>
        <div class="section-inline">
        <p><span>${deviceData[n].specification[3].unu}</span>${deviceData[n].specification[3].doi} <br>${deviceData[n].specification[3].trei}</p>
        </div>`
        
    let sectiunile = `
        <input type="radio" id="color-1" name="color-btn" class="color-btn for-color1" checked>
            <label for="color-1" class="first-color" ></label>`
        document.querySelector('.clearfix').insertAdjacentHTML('afterend',sectiunile);

    for(let i = deviceData[n].number_section; i > 1; i--){
        let sectiunile = `
        <input type="radio" id="color-${i}" name="color-btn" class="color-btn for-color${i}" >
            <label for="color-${i}" class="color-${i}" ></label>`
        document.querySelector('.first-color').insertAdjacentHTML('afterend',sectiunile);
    }

    for(let i = parseInt(deviceData[n].number_section); i > 1; i--){
        let last_divs = `
            <div class="img-wrap watch-${i}"></div>`
        let color_divs = `
            <div class="back-color watch-${i} mob-${i}"></div>
            `
        document.querySelector('#last-wrap').insertAdjacentHTML('afterend',last_divs);
        document.querySelector('#div-color').insertAdjacentHTML('afterend',color_divs);
    }
    let last_divs = `
            <div class="img-wrap watch-${1}"></div>`
    document.querySelector('#last-wrap').insertAdjacentHTML('afterend',last_divs);


    document.querySelector('body').style.backgroundImage = deviceData[n].bg_image[0];
    document.querySelector('#div-color').style.backgroundImage = deviceData[n].bg_image[0];
    for(let i = parseInt(deviceData[0].number_section)-1; i < parseInt(deviceData[n].number_section)+1; i++){
        document.querySelector('.mob-'+i).style.backgroundImage = deviceData[n].bg_image[i-1];
    }

    document.querySelector('.first-color').style.backgroundImage = deviceData[n].src[0];
    document.querySelector('.img-wrap').style.backgroundImage = deviceData[n].src[0];
    for(let i = parseInt(deviceData[0].number_section)-1; i < parseInt(deviceData[n].number_section)+1; i++){
        document.querySelector('.color-'+i).style.backgroundImage = deviceData[n].src[i-1];
        document.querySelector('.watch-'+i).style.backgroundImage = deviceData[n].src[i-1];
    }
}

function text_black(){
    const buttons = document.querySelectorAll('.color-btn');
    const title_up = document.querySelector('.title-up');
    const h2 = document.querySelector('h2');
    const h3 = document.querySelector('h3');
    const body = document.querySelector('body');
    const h5 = document.querySelector('h5');
    const label = document.querySelectorAll('label');
    const span = document.querySelector('span');
    const svg = document.querySelector('svg');
    const icon = document.querySelector('.icon');
    const btn = document.querySelector('.btn');

    btn.addEventListener('mouseover', function(){
        icon.style.color = "white";
    })
    btn.addEventListener('mouseout', function(){
        icon.style.color = "black";
    })
    icon.style.color = "black";
    title_up.style.color = "black";
    h2.style.color = "black";
    h3.style.color = "black";
    body.style.color = "black";
    h5.style.color = "black";
    svg.style.fill = "black";
    label.forEach(element => {
        element.style.color = "black";
    });
    span.style.color = "black";
}

function text_white(){
    const buttons = document.querySelectorAll('.color-btn');
    const title_up = document.querySelector('.title-up');
    const h2 = document.querySelector('h2');
    const h3 = document.querySelector('h3');
    const body = document.querySelector('body');
    const h5 = document.querySelector('h5');
    const label = document.querySelectorAll('label');
    const span = document.querySelector('span');
    const svg = document.querySelector('svg');
    const icon = document.querySelector('.icon');
    const btn = document.querySelector('.btn');

    btn.addEventListener('mouseover', function(){
        icon.style.color = "white";
    })
    btn.addEventListener('mouseout', function(){
        icon.style.color = "white";
    })
    icon.style.color = "white";
    svg.style.fill = "white";
    title_up.style.color = "white";
    h2.style.color = "white";
    h3.style.color = "white";
    body.style.color = "white";
    h5.style.color = "white";
    label.forEach(element => {
        element.style.color = "white";
    });
    span.style.color = "white";
}

function addListenerMulti(element, eventNames, listener) {
    var events = eventNames.split(' ');
    for (var i=0, iLen=events.length; i<iLen; i++) {
      element.addEventListener(events[i], listener, false);
    }
  }

if( localStorage.getItem("for-changeable-page") == '1'){
    general(0);

    window.addEventListener('change',function(){
    const buttons = document.querySelectorAll('.color-btn');
    for(let i = 0; i < buttons.length; i++){
        if(buttons[i].checked && i == 0){
            text_white();
        }
        else if(buttons[i].checked && i == 1){
           text_black();
        }
        else if(buttons[i].checked && i == 2){
            text_white();
        }
    }});
}

if( localStorage.getItem("for-changeable-page") == '2'){
    general(1);
        const buttons = document.querySelectorAll('.color-btn');
        addListenerMulti(window, 'change DOMContentLoaded', function(){
            for(let i = 0; i < buttons.length; i++){
                if(buttons[i].checked && i == 0){
                    text_black();
                }
                else if(buttons[i].checked && i == 1){
                   text_black();
                }
                else if(buttons[i].checked && i == 2){
                    text_white();
                }
                else if(buttons[i].checked && i == 3){
                    text_black();
                }
                else if(buttons[i].checked && i == 4){
                    text_white();
                }
                else if(buttons[i].checked && i == 5){
                    text_white();
                }
            }
        });
}

if( localStorage.getItem("for-changeable-page") == '3'){
    general(2);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
               text_black();
            }
            else if(buttons[i].checked && i == 2){
                text_black();
            }
            else if(buttons[i].checked && i == 3){
                text_black();
            }
            else if(buttons[i].checked && i == 4){
                text_white();
            }
            else if(buttons[i].checked && i == 5){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '4'){
    general(3);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
               text_black();
            }
            else if(buttons[i].checked && i == 2){
                text_black();
            }
            else if(buttons[i].checked && i == 3){
                text_white();
            }
            else if(buttons[i].checked && i == 4){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '5'){
    general(4);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
               text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '6'){
    general(5);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
               text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '7'){
    general(6);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
               text_black();
            }
            else if(buttons[i].checked && i == 2){
                text_black();
             }
            else if(buttons[i].checked && i == 3){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '8'){
    general(7);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
               text_white();
            }
            else if(buttons[i].checked && i == 2){
                text_black();
             }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '9'){
    general(8);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
               text_white();
            }
            else if(buttons[i].checked && i == 2){
                text_black();
             }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '10'){
    general(9);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
               text_black();
            }
            else if(buttons[i].checked && i == 2){
                text_black();
             }
            else if(buttons[i].checked && i == 3){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '11'){
    general(10);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_white();
            }
            else if(buttons[i].checked && i == 1){
               text_black();
            }
            else if(buttons[i].checked && i == 2){
                text_black();
             }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '12'){
    general(11);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_white();
            }
            else if(buttons[i].checked && i == 1){
               text_white();
            }
            else if(buttons[i].checked && i == 2){
                text_black();
             }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '13'){
    general(12);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_white();
            }
            else if(buttons[i].checked && i == 1){
                text_black();
            }
            else if(buttons[i].checked && i == 2){
                text_white();
             }
            else if(buttons[i].checked && i == 2){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '14'){
    general(13);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_white();
            }
            else if(buttons[i].checked && i == 1){
                text_black();
            }
            else if(buttons[i].checked && i == 2){
                text_black();
             }
            else if(buttons[i].checked && i == 3){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '15'){
    general(14);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
                text_black();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '16'){
    general(15);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '17'){
    general(16);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
                text_white();
            }
            else if(buttons[i].checked && i == 1){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '18'){
    general(17);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_white();
            }
            else if(buttons[i].checked && i == 1){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
                text_black();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '19'){
    general(18);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '20'){
    general(19);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_black();
            }
            else if(buttons[i].checked && i == 1){
                text_black();
            }
            else if(buttons[i].checked && i == 2){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '21'){
    general(20);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_white();
            }
            else if(buttons[i].checked && i == 1){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '22'){
    general(21);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_white();
            }
            else if(buttons[i].checked && i == 1){
                text_black();
            }
            else if(buttons[i].checked && i == 2){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '23'){
    general(22);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_white();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '24'){
    general(23);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_white();
            }
            else if(buttons[i].checked && i == 1){
                text_black();
            }
            else if(buttons[i].checked && i == 2){
                text_black();
            }
            else if(buttons[i].checked && i == 3){
                text_white();
            }
            else if(buttons[i].checked && i == 4){
                text_black();
            }
        }
    })
}

if( localStorage.getItem("for-changeable-page") == '25'){
    general(24);
    const buttons = document.querySelectorAll('.color-btn');
    addListenerMulti(window, 'change DOMContentLoaded', function(){
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked && i == 0){
                text_white();
            }
            else if(buttons[i].checked && i == 1){
                text_black();
            }
            else if(buttons[i].checked && i == 2){
                text_black();
            }
            else if(buttons[i].checked && i == 3){
                text_white();
            }
            else if(buttons[i].checked && i == 4){
                text_black();
            }
            else if(buttons[i].checked && i == 5){
                text_black();
            }
        }
    })
}

    document.querySelector('.btn').addEventListener('click', function(){
    let local_stor_var = document.querySelector('h2').textContent.replace(/ /g, '');
    console.log(local_stor_var);
        const buttons = document.querySelectorAll('.color-btn');
        for(let i = 0; i < buttons.length; i++){
            if(buttons[i].checked){
                let imaginea = document.querySelector('.watch-'+(i+1)).style.backgroundImage;
                console.log(imaginea);
                localStorage.setItem(local_stor_var, imaginea)
            }
}})