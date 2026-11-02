<!-- LOVABLE:BEGIN -->
> [!IMPORTANT]
> This project is connected to [Lovable](https://lovable.dev). Avoid rewriting
> published git history — force pushing, or rebasing/amending/squashing commits
> that are already pushed — as it rewrites history on Lovable's side and the
> user will likely lose their project history.
>
> Commits you push to the connected branch sync back to Lovable and show up in
> the editor, so keep the branch in a working state.
<!-- LOVABLE:END -->

## Architecture rules
- Orders are created only through the `place_order` database function, which recomputes prices from `products`; never trust client-side prices.
- Cart lives in the browser (`src/lib/cart.tsx`, localStorage) so guests can shop without an account.
- Client totals in `src/lib/pricing.ts` must mirror `place_order` (VAT on the discounted subtotal).
- Product images are Lovable Assets; their URLs are stored in `products.image_url`.
