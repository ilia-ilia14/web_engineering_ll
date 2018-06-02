
        <nav>
            <ul style="list-style: none;">
                <!-- display links for all categories -->
                <?php foreach($categories as $category) : ?>
                <li>
                    <a href="?category_id=<?php 
                              echo $category['categoryid']; ?>">
                        <?php echo $category['categoryname']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
