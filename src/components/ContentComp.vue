<template>
    <div class="content-container">
        <img src="https://rowmark-ram.s3.amazonaws.com/Rowmark-R.svg" alt="Rowmark-R">
        <div class="text-content">
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
$font-family: Lato;

.content-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 1rem;
    max-width: 674px;
    margin: 2rem auto auto 250px;
    padding: 1rem;
    box-sizing: border-box;

    img {
        width: clamp(120px, 30vw, 268px);
        height: auto;
    }

    .text-content {
        flex: 1;
        text-align: left;
        font-family: $font-family;

        h2 {
            margin: 0;
            padding: 0;
            color: #003475;
            font-size: clamp(1.75rem, 4vw, 2.25rem);

            span {
                font-size: 25px;
                font-weight: 300;
            }
        }

        h3 {
            margin: 0.5rem 0;
            color: #5A5A5A;
            font: italic normal 300 clamp(1.25rem, 2vw, 1.6rem) $font-family;
        }
        p {
            color: #707070;
            font-size: clamp(1rem, 2vw, 1.3rem);
            line-height: 1.4;
        }
    }

    @media (max-width: 1800px) {
        margin: auto;
    }
}
</style>
