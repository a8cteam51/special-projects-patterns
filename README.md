# WordPress.com Special Projects Pattern Library

## Using block patterns

If you want to use these block patterns, download and install the [Team 51 Pattern Inserter plugin](https://github.com/a8cteam51/team51-pattern-inserter/releases/latest/download/team51-pattern-inserter.zip). This will automatically add all block patterns to your site.

## Adding block patterns to the library

Members of the WordPress.com Special Projects Team, please use the private patterns library to register the new block. 

Community members can also add a block pattern by following these steps:

- Create a new branch to work with. The branch name should be: `add/{block-slug}`
- Export the block pattern to JSON from the Patterns page on WP Admin (`<your-site>/wp-admin/edit.php?post_type=wp_block`). If you're [registering the pattern in code](https://developer.wordpress.org/themes/features/block-patterns/#registering-block-patterns), convert the pattern information into a JSON object. The indexes in the `$pattern_properties` parameter of the [`register_block_pattern()` function](https://developer.wordpress.org/reference/functions/register_block_pattern/) should directly transfer to the JSON object.
- Remove any site-specific content from the JSON file. If you need to include a placeholder image, you use [Placehold](https://placehold.co/) for them. (For example, a 600x500 placeholder image can be accessed at https://placehold.co/600x500 .)
- Insert the JSON file into the appropriate category folder. If you need to create a new category, create the folder and also a `metadata.json` file using this format:
```json
{
	"title": "{Category Title}"
}
```
- Create a PR. Once it has been reviewed and merged, the block pattern will be automatically released and available to the [Team 51 Pattern Inserter plugin](https://github.com/a8cteam51/team51-pattern-inserter/releases/latest/download/team51-pattern-inserter.zip) in a few minutes.