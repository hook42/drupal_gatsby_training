import React from "react"
import { Link } from "gatsby"
import { withPrefix } from 'gatsby'

import Layout from "../components/layout"
import SEO from "../components/seo"

const RecipeTeaser = ({imgSrc, recipeTitle, recipeDate, recipeSummary}) => (
  <article>
    <img src={withPrefix('drupal-files/' + imgSrc)} />
    <h2>{recipeTitle}</h2>
    <p>{recipeDate}</p>
    <p>{recipeSummary}</p>
  </article>
)

export default RecipeTeaser
