/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, RichText } from "@wordpress/block-editor";

import "./price-box.scss";

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @param {Object} props            Properties passed to the function.
 * @param {Object} props.attributes Available block attributes.
 * @return {WPElement} Element to render.
 */
export default function save({ attributes }) {
  const blockProps = useBlockProps.save();
  return (
    <div {...blockProps}>
      <div className="price-box">
        {attributes.badge && (
          <RichText.Content
            tagName="div"
            value={attributes.badgeText}
            style={{
              position: "absolute",
              top: "-10px",
              right: "-10px",
              backgroundColor: "#4999f8",
              color: "#fff",
              padding: "5px 10px",
              fontWeight: "bold",
            }}
          />
        )}
        <div>
          <RichText.Content
            tagName="p"
            style={{ color: "#4999f8" }}
            value={attributes.subTitle}
          />
          <RichText.Content
            tagName="h1"
            style={{ borderBottom: "1px solid #4999f8", paddingBottom: "1rem" }}
            value={attributes.price}
          />
          <RichText.Content
            style={{ listStyle: "none" }}
            tagName="ul"
            value={attributes.points}
          />
          <a href={attributes.buttonUrl}>
            <RichText.Content
              style={{ backgroundColor: attributes.buttonColor }}
              tagName="button"
              value={attributes.button}
              href={attributes.buttonUrl}
            />
          </a>
        </div>
      </div>
    </div>
  );
}
