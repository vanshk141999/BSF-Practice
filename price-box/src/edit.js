/**
 * WordPress components that create the necessary UI elements for the block
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-components/
 */
import {
  Button,
  ColorPalette,
  ColorPicker,
  PanelBody,
  TextControl,
  ToggleControl,
} from "@wordpress/components";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {
  useBlockProps,
  RichText,
  InspectorControls,
} from "@wordpress/block-editor";

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

  return (
    <div {...blockProps}>
      <InspectorControls>
        <PanelBody title="Recommended Badge Settings">
          <ToggleControl
            label="Recommended Badge"
            help="Enable to show the Recommended Badge"
            checked={attributes.badge}
            onChange={(value) => setAttributes({ badge: value })}
          />
          {attributes.badge && (
            <TextControl
              label="Recommended Badge Text"
              value={attributes.badgeText}
              onChange={(value) => setAttributes({ badgeText: value })}
            />
          )}
        </PanelBody>
        <PanelBody title="Buy Now Button Settings">
          <TextControl
            label="Buy Now Button URL"
            value={attributes.buttonUrl}
            onChange={(value) => setAttributes({ buttonUrl: value })}
          />
          <p>Buy Now Button URL</p>
          <ColorPalette
            value={attributes.buttonColor}
            onChange={(value) => setAttributes({ buttonColor: value })}
          />
        </PanelBody>
      </InspectorControls>
      <div className="price-box">
        {attributes.badge && (
          <RichText
            tagName="div"
            className="pricing-badge"
            value={attributes.badgeText}
            onChange={(value) => setAttributes({ badgeText: value })}
          />
        )}
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
        <Button
          variant="primary"
          className="buy-now"
          style={{ backgroundColor: attributes.buttonColor }}
          href={attributes.buttonUrl}
        >
          <RichText
            tagName="p"
            placeholder="Buy Now ->"
            value={attributes.button}
            onChange={(val) => setAttributes({ button: val })}
          />
        </Button>
      </div>
    </div>
  );
}
