/**
 * WordPress components that create the necessary UI elements for the block
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-components/
 */
import { TextControl } from "@wordpress/components";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, RichText } from "@wordpress/block-editor";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @param {Object}   props               Properties passed to the function.
 * @param {Object}   props.attributes    Available block attributes.
 * @param {Function} props.setAttributes Function that updates individual attributes.
 *
 * @return {WPElement} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
  const blockProps = useBlockProps();

  // const { subTitle, price } = attributes;

  return (
    <div {...blockProps}>
      <div className="price-box">
        <RichText
          tagName="p"
          className="sub-title"
          placeholder="Premium"
          value={attributes.subTitle}
          onChange={(val) => setAttributes({ subTitle: val })}
        />
        <RichText
          tagName="h1"
          placeholder="$100"
          value={attributes.price}
          onChange={(val) => setAttributes({ price: val })}
        />
        <ul>
          <RichText
            tagName="ul"
            multiline="li"
            placeholder=""
            value={attributes.points}
            onChange={(val) => setAttributes({ points: val })}
          />
        </ul>
      </div>
    </div>
  );
}
