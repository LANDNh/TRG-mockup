<template>
    <div class="footer">
        <p>Copyright © 2010 - 2022 Rowmark, LLC. - All rights reserved</p>
    </div>
</template>

<style scoped lang="scss">
    .footer {
        display: flex;
        justify-content: end;
        align-items: center;
        width: 100%;
        height: 100%;
        max-height: 78px;
        flex-shrink: 0;
        background-color: #464646;
        color: #FFFFFF;

        p {
            width: 100%;
            max-width: 416px;
            height: 19px;
            margin-right: clamp(2.5rem, 10vw, 20rem);
            padding: 0;
            font-size: clamp(.6rem, 1vh, 1rem);
            text-align: end;

            @media (max-width: 450px) {
                margin: auto;
                text-align: center;
            }
        }

        @media (max-width: 1350px) {
            flex-shrink: 1;
        }
    }
</style>
