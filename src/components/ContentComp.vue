<template>
    <div class="content-container">
        <img src="https://rowmark-ram.s3.amazonaws.com/Rowmark-R.svg" alt="Rowmark-R">
        <div>
            <h2>
                Coding Test <span>v</span>2.0.1
            </h2>
            <h3>The difference is in the details</h3>
            <p>Rowmark always has been and always will be a company built around people. From our highly skilled production, quality and engineering teams to our talented sales, marketing, finance and customer support personnel, </p>
            <p style="font-weight: bold;">Rowmark’s people are what make the difference.</p>
        </div>
    </div>
</template>

<style scoped lang="scss">
.content-container {
    display: flex;
    flex-direction: column;
    width: 674px;
    height: 536px;
    position: absolute;
    top: 435px;
    left: 278px;
    z-index: 1;

    img {
        width: 268px;
        height: 209px;
    }

    div {
        width: 635px;
        text-align: left;

        h2 {
            margin: 0;
            padding: 0;
            color: #003475;
            font-size: 36px;
            span {
                margin: 0;
                padding: 0;
                font-size: 25px;
                font-weight: 300;
            }
        }

        h3 {
            margin: 0;
            padding: 0;
            color: #5A5A5A;
            font: italic normal 300 25px Lato;
        }
        p {
            color: #707070;
            font-size: 20px;
        }
    }
}
</style>
