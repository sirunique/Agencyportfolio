<style>
    .blog--page {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 4rem;
        padding: 5rem 2rem;
    }

    .slider-img {
        height: 200px;
        width: 400px;
    }

    .align,
    .blog {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .slider {
        display: flex;
        flex-direction: column;
        gap: 3rem;
    }

    h2 {
        font-size: 2.5rem;
        /* padding-bottom: 0.5rem; */
    }

    h1 {
        font-size: 20px;
        font-weight: 300;
    }

    /* Desktop view */
    @media only screen and (min-width: 768px) {
        .blog--page {
            padding: 8rem 10rem;
            gap: 6rem;
        }

        .blog {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .slider {
            flex-direction: row;
        }

    }

    /* Desktop view */
</style>