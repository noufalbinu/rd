<div class="hcf_box">
    <style scoped>
        .hcf_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .hcf_field{
            display: contents;
        }
    </style>
    <p class="meta-options hcf_field">
        <label for="hcf_author">Client Name</label>
        <input id="hcf_author"
            type="text"
            name="hcf_author"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_author', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="hcf_published_date">Build With</label>
        <input id="hcf_published_date"
            type="text"
            name="hcf_published_date"
           value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_published_date', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="hcf_price">Site Address</label>
        <input id="hcf_price"
            type="text"
            name="hcf_price"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_price', true ) ); ?>">
    </p>
</div>