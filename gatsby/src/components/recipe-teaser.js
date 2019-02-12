import React from "react"
import { Link } from "gatsby"
import { withPrefix } from 'gatsby'


const RecipeTeaser = ({imgSrc, recipeTitle, recipeDate, recipeSummary, recipeSlug}) => (
  <article>
    <img src={withPrefix('drupal-files/' + imgSrc)} alt="" />
    <Link to={recipeSlug}>
      <h2>{recipeTitle}</h2>
    </Link>
    <p>{recipeDate}</p>
    <p>{recipeSummary}</p>
  </article>
)

export default RecipeTeaser
