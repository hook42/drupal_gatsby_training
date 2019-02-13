import React from "react"
import { Link } from "gatsby"
import { withPrefix } from 'gatsby'


const RecipeTeaser = ({imgSrc, recipeTitle, recipeDate, recipeSummary, recipeSlug}) => (
  <div>
    <img src={withPrefix('drupal-files/' + imgSrc)} alt="" />
    <Link to={recipeSlug}>
      <h2>{recipeTitle}</h2>
    </Link>
    <p>{recipeDate}</p>
    <p>{recipeSummary}</p>
  </div>
)

export default RecipeTeaser
