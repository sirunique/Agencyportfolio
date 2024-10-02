<style>
    body {
        background-color: #f3ebe0;
    }

    .flex {
        display: flex;
        flex-direction: column;
    }

    .details {
        justify-content: center;
        align-items: center;
        gap: 5rem;
        padding: 5rem 1rem;
    }

    .text-container {
        gap: 5rem;
        width: 90%;
    }

    h1 {
        text-transform: uppercase;
        font-size: 30px;
        letter-spacing: 4px;
        margin-bottom: 20px;
    }

    span {
        font-size: 1.5vh;
    }

    .img-container {
        gap: 1rem;
    }

    .split-img {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .grid-img {
        flex: 1;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .back {
        margin-top: 1rem;
    }

    /* Desktop */
    @media only screen and (min-width: 780px) {
        .details:not(:first-child) {
            padding: 5rem 25vw;
        }

        .text-container {
            flex-direction: row;
            width: 100%;
            justify-content: center;
            align-items: center;
        }
    }

    /* Desktop */
</style>